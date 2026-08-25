<?php
/**
 * Tests for RuneSway
 */

use PHPUnit\Framework\TestCase;
use Runesway\Runesway;

class RuneswayTest extends TestCase {
    private Runesway $instance;

    protected function setUp(): void {
        $this->instance = new Runesway(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Runesway::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
