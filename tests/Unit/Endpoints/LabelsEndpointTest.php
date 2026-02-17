<?php

declare(strict_types=1);

namespace DPD\Tests\Unit\Endpoints;

use DPD\Auth\Authenticator;
use DPD\Endpoints\Labels;
use DPD\Http\HttpClient;
use DPD\Http\Response;
use DPD\Models\Label;
use GuzzleHttp\Psr7\Response as GuzzleResponse;
use PHPUnit\Framework\TestCase;

class LabelsEndpointTest extends TestCase
{
    public function testCreateReturnsLabelModel(): void
    {
        $httpClient = $this->createMock(HttpClient::class);
        $authenticator = $this->createMock(Authenticator::class);
        $authenticator->method('isTokenValid')->willReturn(true);

        $request = ['shipmentIds' => ['sh-1'], 'downloadLabel' => true];
        $payload = ['content' => base64_encode('pdf-content'), 'format' => 'application/pdf'];

        $httpClient
            ->expects($this->once())
            ->method('post')
            ->with('/shipments/labels', $request)
            ->willReturn($this->responseFromArray($payload));

        $endpoint = new Labels($httpClient, $authenticator);
        $label = $endpoint->create($request);

        $this->assertInstanceOf(Label::class, $label);
        $this->assertSame('application/pdf', $label->getFormat());
    }

    public function testPrintReturnsLabelModel(): void
    {
        $httpClient = $this->createMock(HttpClient::class);
        $authenticator = $this->createMock(Authenticator::class);
        $authenticator->method('isTokenValid')->willReturn(true);

        $request = ['shipmentIds' => ['sh-1'], 'paperSize' => 'A4'];
        $payload = ['pdf' => base64_encode('print-content'), 'format' => 'application/pdf'];

        $httpClient
            ->expects($this->once())
            ->method('post')
            ->with('/shipments/print/labels', $request)
            ->willReturn($this->responseFromArray($payload));

        $endpoint = new Labels($httpClient, $authenticator);
        $label = $endpoint->print($request);

        $this->assertInstanceOf(Label::class, $label);
        $this->assertNotEmpty($label->getContent());
    }

    public function testGetCustomerLabelReturnsLabelModel(): void
    {
        $httpClient = $this->createMock(HttpClient::class);
        $authenticator = $this->createMock(Authenticator::class);
        $authenticator->method('isTokenValid')->willReturn(true);

        $payload = ['content' => base64_encode('customer-label')];

        $httpClient
            ->expects($this->once())
            ->method('get')
            ->with('/customers/shipments/sh-1/labels/lb-1', [])
            ->willReturn($this->responseFromArray($payload));

        $endpoint = new Labels($httpClient, $authenticator);
        $label = $endpoint->getCustomerLabel('sh-1', 'lb-1');

        $this->assertInstanceOf(Label::class, $label);
    }

    private function responseFromArray(array $data): Response
    {
        $guzzleResponse = new GuzzleResponse(200, ['Content-Type' => 'application/json'], json_encode($data));
        return new Response($guzzleResponse);
    }
}
