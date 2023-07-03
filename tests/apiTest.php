<?php

use Iim\td2\Api;
use PHPUnit\Framework\TestCase;
class ApiTest extends TestCase
{

    public function testGetDate()
    {
        $api = new Api();
        $this->assertEquals(new \DateTime(), $api->getDate());
        $this->assertInstanceOf($api->getDataAsSting());
        $this->assertSame('y-m-d', $api->getDataAsSting());

    }


}