<?php
/**
 * Tests for ChainNova
 */

use PHPUnit\Framework\TestCase;
use Chainnova\Chainnova;

class ChainnovaTest extends TestCase {
    private Chainnova $instance;

    protected function setUp(): void {
        $this->instance = new Chainnova(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainnova::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
