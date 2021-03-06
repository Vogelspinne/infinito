<?php

namespace App\Tests\Unit\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Controller\DefaultController;

/**
 * @author kevinfrantz
 */
class DefaultControllerTest extends WebTestCase
{
    /**
     * @var DefaultController
     */
    protected $defaultController;

    public function setUp(): void
    {
        $this->defaultController = new DefaultController();
    }

    public function testHomepage(): void
    {
        $client = static::createClient();
        $client->request('GET', '/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testImprint(): void
    {
        $client = static::createClient();
        $client->request('GET', '/imprint');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
