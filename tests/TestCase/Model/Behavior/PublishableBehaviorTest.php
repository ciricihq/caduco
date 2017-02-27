<?php
namespace Cirici\Dateit\Test\TestCase\Model\Behavior;

use Cake\I18n\Date;
use Cake\I18n\Time;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use DatePublished\Model\Behavior\PublishableBehavior;

class PublishableBehaviorTest extends TestCase
{
    /**
     * Fixtures to load.
     *
     * @var array
     */
    public $fixtures = [
        'plugin.Cirici/Dateit.pages',
        'plugin.Cirici/Dateit.date_publisheds'
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
            'className' => 'Cirici/Dateit.Pages',
            'table' => 'pages',
            'registryAlias' => 'Page'
        ]);
        $this->Pages->addBehavior('Cirici/Dateit.Publishable');
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
        unset($this->Pages, $this->DatePublisheds);
    }

    /**
     * Test the beforeFind callback.
     *
     * @return void
     */
    public function testBeforeFind()
    {
        $pages = $this->Pages->find()
            ->contain('DatePublisheds');
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
     * Test the findAllActive callback.
     *
     * @return void
     */
    public function testFindAllActive()
    {
        $pages = $this->Pages->find()
            ->contain('DatePublisheds');
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
