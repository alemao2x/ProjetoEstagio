<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SearchTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SearchTable Test Case
 */
class SearchTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SearchTable
     */
    public $Search;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.search'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Search') ? [] : ['className' => SearchTable::class];
        $this->Search = TableRegistry::get('Search', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Search);

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
