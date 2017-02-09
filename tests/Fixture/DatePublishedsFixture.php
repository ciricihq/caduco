<?php
namespace Cirici\Dateit\Test\Fixture;

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
        'model' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'foreign_key' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'begin_date' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'end_date' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
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
            'model' => 'Page',
            'foreign_key' => 1,
            'begin_date' => '2050-02-24',
            'end_date' => '2055-02-24'
        ],
        [
            'id' => 2,
            'model' => 'Page',
            'foreign_key' => 2,
            'begin_date' => null,
            'end_date' => '2016-02-24'
        ],
        [
            'id' => 3,
            'model' => 'Page',
            'foreign_key' => 3,
            'begin_date' => '2015-02-22',
            'end_date' => '2015-02-24'
        ],
        [
            'id' => 4,
            'model' => 'Page',
            'foreign_key' => 4,
            'begin_date' => '2055-02-22',
            'end_date' => null
        ],
        [
            'id' => 5,
            'model' => 'Page',
            'foreign_key' => 5,
            'begin_date' => '2016-02-22',
            'end_date' => null
        ],
        [
            'id' => 6,
            'model' => 'Page',
            'foreign_key' => 6,
            'begin_date' => '2016-02-22',
            'end_date' => '2055-02-22'
        ],
    ];
}
