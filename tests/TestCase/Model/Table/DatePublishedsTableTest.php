<?php
namespace DatePublished\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use DatePublished\Model\Table\DatePublishedTable;

/**
 * DatePublished\Model\Table\DatePublishedTable Test Case
 */
class DatePublishedTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \DatePublished\Model\Table\DatePublishedTable
     */
    public $DatePublisheds;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DatePublished);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
