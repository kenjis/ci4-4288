<?php

class RedirectExceptionTest extends \CodeIgniter\Test\FeatureTestCase
{
    public function testGetTest()
    {
        $result = $this->call('get', 'test');
    }
}
