<?php
namespace Cirici\Caduco\Test\TestCase\Model\Behavior;

use Cake\I18n\Date;
use Cake\I18n\Time;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Cirici\Caduco\Model\Behavior\CaducoBehavior;

class CaducoBehaviorTest extends TestCase
{
    /**
     * Fixtures to load.
     *
     * @var array
     */
    public $fixtures = [
        'plugin.Cirici/Caduco.pages',
        'plugin.Cirici/Caduco.caducities'
    ];

    /**
     * Runs before each test.
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Pages = TableRegistry::get('Pages', [
            'className' => 'Cirici/Caduco.Pages',
            'table' => 'pages',
            'registryAlias' => 'Page'
        ]);
        $this->Pages->addBehavior('Cirici/Caduco.Caduco');
    }

    /**
     * Runs after each test.
     *
     * @return void
     */
    public function tearDown()
    {
        parent::tearDown();
        TableRegistry::clear();
        unset($this->Pages, $this->Caducities);
    }

    /**
     * Test the beforeFind callback.
     *
     * @return void
     */
    public function testBeforeFind()
    {
        $pages = $this->Pages->find()
            ->contain('Caducities');
        $this->assertCount(3, $pages);
        foreach ($pages as $page) {
            if (!empty($page->date_publisheds->begin_date)) {
                $beginDate = $page->date_publisheds->begin_date;
                $this->assertTrue($beginDate->isPast() || $beginDate->isToday());
            }
            if (!empty($page->date_publisheds->end_date)) {
                $endDate = $page->date_publisheds->end_date;
                $this->assertTrue($endDate->isFuture());
            }
        }
        $this->Pages->behaviors()->get('Caduco')->config([
            'filterActive' => false
        ]);
        $pages = $this->Pages->find()->contain('Caducities');
        $this->assertCount(8, $pages);

        $this->Pages->behaviors()->get('Caduco')->config([
            'dateable' => true
        ]);

        $data = [
            'parent_id' => 1,
            'user_id' => 1,
            'lft' => 1,
            'rght' => 1,
            'title' => 'Lorem ipsum dolor sit amet',
            'slug' => 'Lorem ipsum dolor sit amet',
            'text' => 'Lorem ipsum dolor sit amet',
            'only_for_members' => 1,
            'deleted' => 0,
            'deleted_date' => null,
            'visible' => 1,
            'begin_date' => '2016-02-22',
            'end_date' => '2019-02-22'
        ];

        $newPage = $this->Pages->newEntity($data);
        $this->Pages->save($newPage);
        $id = $newPage->id;
        $page = $this->Pages->find()
            ->contain('Caducities')
            ->where(['Pages.id' => $id])
            ->first()
        ;
        $this->assertEquals('2016-02-22', $page->caducity->begin_date->format('Y-m-d'));
        $this->assertEquals('2019-02-22', $page->caducity->end_date->format('Y-m-d'));
    }

    /**
     * Test the findAllActive callback.
     *
     * @return void
     */
    public function testFindAllActive()
    {
        $pages = $this->Pages->find()
            ->contain('Caducities');
        $this->assertCount(3, $pages);
        foreach ($pages as $page) {
            if (!empty($page->date_publisheds->begin_date)) {
                $beginDate = $page->date_publisheds->begin_date;
                $this->assertTrue($beginDate->isPast() || $beginDate->isToday());
            }
            if (!empty($page->date_publisheds->end_date)) {
                $endDate = $page->date_publisheds->end_date;
                $this->assertTrue($endDate->isFuture());
            }
        }
    }

    /**
     * Tests findExpired
     *
     * @return void
     */
    public function testFindExpired()
    {
        $this->markTestIncomplete('find expired test not implemented yet');
    }

    /**
     * Tests findNotActive
     *
     * @return void
     */
    public function testFindNotActive()
    {
        $this->markTestIncomplete('find not active test not implemented yet');
    }
}
