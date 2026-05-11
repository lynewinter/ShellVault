<?php
/**
 * Tests for ShellVault
 */

use PHPUnit\Framework\TestCase;
use Shellvault\Shellvault;

class ShellvaultTest extends TestCase {
    private Shellvault $instance;

    protected function setUp(): void {
        $this->instance = new Shellvault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Shellvault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
