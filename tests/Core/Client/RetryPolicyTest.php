<?php

/**
 * Regression coverage for the generated SDK's recommended retry policy.
 * Copied into the generated package so GitLab and GitHub run the same tests.
 *
 * Copyright (c) ServiceM8
 */

namespace ServiceM8\Tests\Core\Client;

use Http\Discovery\Psr17FactoryDiscovery;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use ServiceM8\Core\Client\MockHttpClient;
use ServiceM8\Core\Client\RetryDecoratingClient;

class RetryPolicyTest extends TestCase
{
    /** @return iterable<string, array{int, bool}> */
    public static function statusCodes(): iterable
    {
        foreach ([408, 429, 502, 503, 504] as $intStatus) {
            yield "retry $intStatus" => [$intStatus, true];
        }
        foreach ([400, 401, 403, 404, 500, 501, 505, 599] as $intStatus) {
            yield "do not retry $intStatus" => [$intStatus, false];
        }
    }

    #[DataProvider('statusCodes')]
    public function testRecommendedPolicy(int $intStatus, bool $boolRetry): void
    {
        $objFactory = Psr17FactoryDiscovery::findResponseFactory();
        $objMock = new MockHttpClient();
        $objMock->append($objFactory->createResponse($intStatus), $objFactory->createResponse(200));
        $objClient = new RetryDecoratingClient($objMock, maxRetries: 2, sleepFunction: static function (int $intMicroseconds): void {});
        $objRequest = Psr17FactoryDiscovery::findRequestFactory()->createRequest('GET', 'https://api.example.com/test');

        $objResponse = $objClient->sendRequest($objRequest);

        self::assertSame($boolRetry ? 200 : $intStatus, $objResponse->getStatusCode());
        self::assertSame($boolRetry ? 0 : 1, $objMock->count());
    }
}
