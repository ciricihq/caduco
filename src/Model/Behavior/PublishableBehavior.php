<?php
namespace Cirici\Dateit\Model\Behavior;

use ArrayObject;
use Cake\Event\Event;
use Cake\ORM\Behavior;
use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Utility\Inflector;

class PublishableBehavior extends Behavior
{
    protected $_defaultConfig = [
        'datePublishableClass' => 'Dateit.DatePublisheds',
        'foreignKey' => 'foreign_key',
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

        $this->_table->hasOne('Dateit.DatePublisheds', [
            'className' => $config['datePublishableClass'],
            'foreignKey' => $config['foreignKey'],
            'conditions' => [
                'DatePublisheds.model' => $model,
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
        $query->find('AllActive');
    }

    /**
     * Returns the query for all the active elements
     *
     * @return \Cake\ORM\Query
     */
    public function findAllActive(Query $query)
    {
        return $query->notMatching('DatePublisheds', function ($q) {
            return $q->where(['OR' => [
                    'DatePublisheds.begin_date >' => $q->func()->now(),
                    'DatePublisheds.end_date <' => $q->func()->now(),
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
        return $query->matching('DatePublisheds', function ($q) {
            return $q->where([
                'DatePublisheds.end_date <' => $q->func()->now()
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
        return $query->matching('DatePublisheds', function ($q) {
            return $q->where([
                'DatePublisheds.begin_date >' => $q->func()->now()
            ]);
        });
    }
}
