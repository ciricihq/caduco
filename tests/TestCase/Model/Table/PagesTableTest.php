<?php
namespace DatePublished\Test\TestCase\Model\Table;

use App\Model\Table\PagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EquipmentsTable Test Case
 */
class PagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EquipmentsTable
     */
    public $Pages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.date_published.pages',
        'plugin.date_published.date_publisheds',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Pages') ? [] : ['className' => 'App\Model\Table\PagesTable'];
        $this->Pages = TableRegistry::get('Pages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pages);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->assertTrue($this->Pages->hasBehavior('Publishable'));
    }

    public function testGetPages()
    {
        $pages = $this->Pages->getPages();
        $this->assertFalse(empty($pages));
    }
}