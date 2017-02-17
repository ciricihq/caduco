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
        'datePublishableClass'  => 'Dateit.DatePublisheds',
        'foreignKey'            => 'foreign_key',
    ];

    public function initialize(array $config)
    {
        $config = $this->config();
        $model = Inflector::singularize($this->_table->registryAlias());

        $this->_table->hasOne('Dateit.DatePublisheds', [
            'className'  => $config['datePublishableClass'],
            'foreignKey' => $config['foreignKey'],
            'conditions' => [
                'DatePublisheds.model' => $model
            ]
        ]);
    }

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
        return $query
            ->notMatching('DatePublisheds', function ($q) {
                return $q->where([ 'OR' => [
                        'DatePublisheds.begin_date >' => $q->func()->now(),
                        'DatePublisheds.end_date <' => $q->func()->now()
                    ]
                ]);
            })
        ;
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
