<?php

use PHPUnit\Framework\TestCase;

final class MathTest extends TestCase
{
    /**
     * @group math
     * @dataProvider provider
     */
    public function testSum($a, $b, $c): void {
        $s = new Math();
        $this->assertEquals($s->sum($a, $b), $c);
    }

    public function provider()
    {
        return array(
          array(0, 0, 0),
          array(0, 1, 1),
          array(1, 0, 1),
          array(1, 1, 2),
        );
    }
}