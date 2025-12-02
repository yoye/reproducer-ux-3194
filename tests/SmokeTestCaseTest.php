<?php

namespace App\Tests;

use PHPUnit\Framework\Attributes\TestWith;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SmokeTestCaseTest extends WebTestCase
{

    #[TestWith(['/'])]
    #[TestWith(['/with-validator'])]
    public function testSomething(string $uri): void
    {
        $client = static::createClient();
        $client->request('GET', $uri);

        $this->assertResponseIsSuccessful();
    }
}
