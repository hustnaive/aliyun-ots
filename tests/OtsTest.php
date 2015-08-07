<?php
namespace ots\tests;

require dirname(__DIR__).'/src/Ots.php';

use ots\Ots;

class OtsTest extends \PHPUnit_Framework_TestCase {
    
    private $ots;
    
    public function setUp() {
        $this->ots = new Ots('1', 'b', 'test');
    }
    
    public function testA() {
        $this->ots->getRow('a', [1]);
    }
}