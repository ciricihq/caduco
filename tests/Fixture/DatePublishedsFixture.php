<?php
namespace DatePublished\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DatePublishedsFixture
 *
 */
class DatePublishedsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'model' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'foreign_key' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'begin_date' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'end_date' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'model' => 'Pages',
            'foreign_key' => 1,
            'begin_date' => '2040-10-31 15:39:34',
            'end_date' => null
        ],
        [
            'id' => 2,
            'model' => 'Pages',
            'foreign_key' => 2,
            'begin_date' => null,
            'end_date' => '2000-10-31 15:39:34'
        ],
        [
            'id' => 3,
            'model' => 'Pages',
            'foreign_key' => 3,
            'begin_date' => '2000-08-31 15:39:34',
            'end_date' => '2000-10-31 15:39:34'
        ],
        [
            'id' => 4,
            'model' => 'Pages',
            'foreign_key' => 4,
            'begin_date' => '2040-10-31 15:39:34',
            'end_date' => '2040-11-31 15:39:34'
        ]
    ];
}
