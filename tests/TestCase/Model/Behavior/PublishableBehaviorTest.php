<?php
namespace Cirici\Dateit\Test\TestCase\Model\Behavior;
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
        $this->DatePublisheds = TableRegistry::get('Cirici/Dateit.DatePublisheds', ['table' => 'date_publisheds']);
        $this->Pages->addBehavior('Cirici/Dateit.Publishable');
    }

    public function testFindAllActive()
    {
        $result = $this->Pages->find('allActive');
        $this->assertCount(2, $result);
        // $currentDate = new Date();
        // foreach ($posts as $post) {
        //     $this->assertLessThanOrEqual($currentDate->toUnixString(), $post->publish_at->toUnixString());
        //     $currentDate = $post->publish_at;
        // }
    }
}
