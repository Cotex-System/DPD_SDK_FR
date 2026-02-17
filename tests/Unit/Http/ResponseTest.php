<?php

declare(strict_types=1);

namespace DPD\Tests\Unit\Http;

use DPD\Http\Response;
use GuzzleHttp\Psr7\Response as GuzzleResponse;
use PHPUnit\Framework\TestCase;

class ResponseTest extends TestCase
{
    public function testCanCreateSuccessfulResponse(): void
    {
        $data = ['status' => 'success', 'id' => '123'];
        $guzzleResponse = new GuzzleResponse(
            200,
            ['Content-Type' => 'application/json'],
            json_encode($data)
        );
        
        $response = new Response($guzzleResponse);

        $this->assertTrue($response->isSuccessful());
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals($data, $response->getData());
    }

    public function testCanDetectFailedResponse(): void
    {
        $errorData = ['error' => 'Bad request'];
        $guzzleResponse = new GuzzleResponse(
            400,
            ['Content-Type' => 'application/json'],
            json_encode($errorData)
        );
        
        $response = new Response($guzzleResponse);

        $this->assertFalse($response->isSuccessful());
        $this->assertEquals(400, $response->getStatusCode());
    }

    public function testCanGetSpecificDataField(): void
    {
        $data = [
            'user' => ['name' => 'John', 'email' => 'john@example.com'],
            'status' => 'active'
        ];
        $guzzleResponse = new GuzzleResponse(
            200,
            ['Content-Type' => 'application/json'],
            json_encode($data)
        );
        
        $response = new Response($guzzleResponse);

        $this->assertEquals('active', $response->getData()['status']);
        $this->assertEquals('John', $response->getData()['user']['name']);
    }

    public function testHandlesEmptyBody(): void
    {
        $guzzleResponse = new GuzzleResponse(204, [], '');
        $response = new Response($guzzleResponse);

        $this->assertNull($response->getData());
        $this->assertTrue($response->isSuccessful());
    }
}
