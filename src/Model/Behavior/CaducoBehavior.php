<?php
namespace Cirici\Caduco\Model\Behavior;

use ArrayObject;
use Cake\Event\Event;
use Cake\ORM\Behavior;
use Cake\ORM\Entity;
use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Utility\Inflector;


class CaducoBehavior extends Behavior
{
    protected $_defaultConfig = [
        'tableClass' => 'Caduco.Caducities',
        'foreignKey' => 'foreign_key',
        'filterActive' => true
    ];

    /**
     * Initialize method.
     *
     * Creates a hasOne relation between the model and the caduco table.
     *
     * @param  array $config Behavior configuration.
     * @return void
     */
    public function initialize(array $config)
    {
        $config = $this->config();
        $model = Inflector::singularize($this->_table->registryAlias());

        $this->_table->hasOne('Caduco.Caducities', [
            'className' => $config['tableClass'],
            'foreignKey' => $config['foreignKey'],
            'conditions' => [
                'Caducities.model' => $model,
            ],
        ]);
    }

    /**
     * beforeFind method. Forces all the finds of the linked model to use
     * the Caduco finder `allActive`.
     *
     * @param  \Cake\Event\Event $event The event object.
     * @param  \Cake\ORM\Query $query The query of the find.
     * @param  ArrayObject $options Aditional options for the query.
     * @param  bool $primary Whether this is a primary record or not.
     * @return void
     */
    public function beforeFind(Event $event, Query $query, ArrayObject $options, $primary)
    {
        if ($this->config('filterActive')) {
            $query->find('allActive');
        }

        $model = Inflector::singularize($this->_table->registryAlias());
        $Caducity = TableRegistry::get('Caduco.Caducities');

        foreach ($query as $q) {
            $caducity = $Caducity->find()
                ->where([
                    'foreign_key' => $q->id,
                    'model' => $model
                ])
                ->first()
            ;
            if ($caducity) {
                $q->begin_date = $caducity->begin_date;
                $q->end_date = $caducity->end_date;

                if ($caducity->begin_date) {
                    $q->begin_date = $caducity->begin_date->format('Y-m-d');
                }
                if ($caducity->end_date) {
                    $q->end_date = $caducity->end_date->format('Y-m-d');
                }
            }
        }
    }

    /**
     * Returns the query for all the active elements
     *
     * @return \Cake\ORM\Query
     */
    public function findAllActive(Query $query)
    {
        return $query->notMatching('Caducities', function ($q) {
            return $q->where(['OR' => [
                    'Caducities.begin_date >=' => $q->func()->now(),
                    'Caducities.end_date <' => $q->func()->now(),
                ],
            ]);
        });
    }

    /**
     * Returns the query for all the expired elements
     *
     * @return \Cake\ORM\Query
     */
    public function findExpired(Query $query)
    {
        return $query->matching('Caducities', function ($q) {
            return $q->where([
                'Caducities.end_date <=' => $q->func()->now()
            ]);
        });
    }

    /**
     * Returns the query for all the not active elements
     *
     * @return \Cake\ORM\Query
     */
    public function findNotActive(Query $query)
    {
        return $query->matching('Caducities', function ($q) {
            return $q->where([
                'Caducities.begin_date IS NOT' => null
            ]);
        });
    }

    /**
     * After save listener.
     *
     *
     * @param \Cake\Event\Event $event The afterSave event
     * @param Cake\ORM\Entity $entity the entity that is going to be saved
     * @return void
     */
    public function afterSave(Event $event, Entity $entity, ArrayObject $options)
    {
        $beginDate = $endDate = null;

        if (!empty($entity->begin_date)) {
            $beginDate = $entity->begin_date;
        }

        if (!empty($entity->end_date)) {
            $endDate = $entity->end_date;
        }

        $model = Inflector::singularize($this->_table->registryAlias());

        $Caducity = TableRegistry::get('Caduco.Caducities');

        $caducity = $Caducity->find()
            ->where([
                'foreign_key' => $entity->id,
                'model' => $model
            ])
            ->first()
        ;

        if (!$caducity) {
            $caducity = $Caducity->newEntity($caducity);
            $caducity->model = $model;
            $caducity->foreign_key = $entity->id;
        }

        $caducity->begin_date = $beginDate;
        $caducity->end_date = $endDate;

        return $Caducity->save($caducity);
    }
}
