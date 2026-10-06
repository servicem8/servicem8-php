<?php

namespace ServiceM8\Notifications;

use Psr\Http\Client\ClientInterface;
use ServiceM8\Core\Client\RawClient;
use ServiceM8\Notifications\Requests\NotificationCreateRequest;
use ServiceM8\Types\NotificationCreateResponse;
use ServiceM8\Exceptions\Servicem8Exception;
use ServiceM8\Exceptions\Servicem8ApiException;
use ServiceM8\Core\Json\JsonApiRequest;
use ServiceM8\Environments;
use ServiceM8\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;

class NotificationsClient
{
    /**
     * @var array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options @phpstan-ignore-next-line Property is used in endpoint methods via HttpEndpointGenerator
     */
    private array $options;

    /**
     * @var RawClient $client
     */
    private RawClient $client;

    /**
     * @param RawClient $client
     * @param ?array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options
     */
    public function __construct(
        RawClient $client,
        ?array $options = null,
    ) {
        $this->client = $client;
        $this->options = $options ?? [];
    }

    /**
     * Sends a notification from the calling add-on to each supplied staff recipient.
     *
     * @param NotificationCreateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?NotificationCreateResponse
     * @throws Servicem8Exception
     * @throws Servicem8ApiException
     */
    public function createNotification(NotificationCreateRequest $request, ?array $options = null): ?NotificationCreateResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "notification.json",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return NotificationCreateResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new Servicem8Exception(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new Servicem8Exception(message: $e->getMessage(), previous: $e);
        }
        throw new Servicem8ApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }
}
