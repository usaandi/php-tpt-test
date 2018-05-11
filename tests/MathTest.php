<?php

use PHPUnit\Framework\TestCase;

final class MathTest extends TestCase
{
    /**
     * @group math
     */
    public function testSum(): void {
        $s = new Math();
        $this->assertEquals($s->sum(2, 4), 6);
    }
}