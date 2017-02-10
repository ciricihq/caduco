<?php
namespace Cirici\Dateit\Test\TestCase\Model\Behavior;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Cake\I18n\Date;
use Cake\I18n\Time;
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
        $this->DatePublisheds = TableRegistry::get('DatePublisheds', [
            'table' => 'date_publisheds',
            'registryAlias' => 'DatePublisheds'
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
            ->contain('DatePublisheds')
        ;
        $this->assertCount(3, $pages);
        $currentDate = new Date();
        foreach ($pages as $page) {
            if(!empty($page->date_publisheds[0]['begin_date'])) {
                $begin_date = $page->date_publisheds[0]['begin_date'];
                $this->assertTrue($begin_date->isPast() || $begin_date->isToday());
            }
            if(!empty($page->date_publisheds[0]['end_date'])) {
                $end_date = $page->date_publisheds[0]['end_date'];
                $this->assertTrue($end_date->isFuture());
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
        $pages = $this->Pages->find('allActive')
            ->contain('DatePublisheds')
        ;
        $this->assertCount(3, $pages);
        $currentDate = new Date();
        foreach ($pages as $page) {
            if(!empty($page->date_publisheds[0]['begin_date'])) {
                $begin_date = $page->date_publisheds[0]['begin_date'];
                $this->assertTrue($begin_date->isPast() || $begin_date->isToday());
            }
            if(!empty($page->date_publisheds[0]['end_date'])) {
                $end_date = $page->date_publisheds[0]['end_date'];
                $this->assertTrue($end_date->isFuture());
            }
        }
    }
}
