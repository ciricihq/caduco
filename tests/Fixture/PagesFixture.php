<?php
namespace Cirici\Dateit\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PagesFixture
 *
 */
class PagesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'parent_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'user_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'lft' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'rght' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'title' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'slug' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'text' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'only_for_members' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'deleted' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null],
        'deleted_date' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'visible' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '1', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_pages_users1' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
        ],
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
            'parent_id' => 1,
            'user_id' => 1,
            'lft' => 1,
            'rght' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'slug' => 'Lorem ipsum dolor sit amet',
            'text' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'only_for_members' => 1,
            'deleted' => 0,
            'deleted_date' => null,
            'visible' => 1,
            'created' => '2017-02-08 10:32:08',
            'modified' => '2017-02-08 10:32:08'
        ],
        [
            'id' => 2,
            'parent_id' => 1,
            'user_id' => 1,
            'lft' => 1,
            'rght' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'slug' => 'Lorem ipsum dolor sit amet',
            'text' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'only_for_members' => 1,
            'deleted' => 0,
            'deleted_date' => null,
            'visible' => 1,
            'created' => '2017-02-08 10:32:08',
            'modified' => '2017-02-08 10:32:08'
        ],
        [
            'id' => 3,
            'parent_id' => 1,
            'user_id' => 1,
            'lft' => 1,
            'rght' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'slug' => 'Lorem ipsum dolor sit amet',
            'text' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'only_for_members' => 1,
            'deleted' => 0,
            'deleted_date' => null,
            'visible' => 1,
            'created' => '2017-02-08 10:32:08',
            'modified' => '2017-02-08 10:32:08'
        ],
        [
            'id' => 4,
            'parent_id' => 1,
            'user_id' => 1,
            'lft' => 1,
            'rght' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'slug' => 'Lorem ipsum dolor sit amet',
            'text' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'only_for_members' => 1,
            'deleted' => 0,
            'deleted_date' => null,
            'visible' => 1,
            'created' => '2017-02-08 10:32:08',
            'modified' => '2017-02-08 10:32:08'
        ],
        [
            'id' => 5,
            'parent_id' => 1,
            'user_id' => 1,
            'lft' => 1,
            'rght' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'slug' => 'Lorem ipsum dolor sit amet',
            'text' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'only_for_members' => 1,
            'deleted' => 0,
            'deleted_date' => null,
            'visible' => 1,
            'created' => '2017-02-08 10:32:08',
            'modified' => '2017-02-08 10:32:08'
        ],
        [
            'id' => 6,
            'parent_id' => 1,
            'user_id' => 1,
            'lft' => 1,
            'rght' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'slug' => 'Lorem ipsum dolor sit amet',
            'text' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'only_for_members' => 1,
            'deleted' => 0,
            'deleted_date' => null,
            'visible' => 1,
            'created' => '2017-02-08 10:32:08',
            'modified' => '2017-02-08 10:32:08'
        ],
    ];
}
