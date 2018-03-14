<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Src;


class CalculateServiceTest extends TestCase
{
    public function testAbs()
    {

        $ourservice = new Src\CalculateService();

        $this->assertEquals(8, $ourservice->abs(-4));

    }
}