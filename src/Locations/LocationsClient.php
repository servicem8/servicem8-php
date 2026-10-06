<?php

namespace ServiceM8\Locations;

use Psr\Http\Client\ClientInterface;
use ServiceM8\Core\Client\RawClient;
use ServiceM8\Locations\Requests\ListLocationsRequest;
use ServiceM8\Types\Location;
use ServiceM8\Exceptions\Servicem8Exception;
use ServiceM8\Exceptions\Servicem8ApiException;
use ServiceM8\Core\Json\JsonApiRequest;
use ServiceM8\Environments;
use ServiceM8\Core\Client\HttpMethod;
use ServiceM8\Core\Json\JsonDecoder;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use ServiceM8\Types\LocationCreate;
use ServiceM8\Types\Result;
use ServiceM8\Locations\Requests\UpdateLocationsRequest;

class LocationsClient
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
     *
     *
     * #### Filtering
     * This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
     *
     *
     * #### OAuth Scope
     * This endpoint requires the following OAuth scope **read_locations**.
     *
     *
     *
     * @param ListLocationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?array<Location>
     * @throws Servicem8Exception
     * @throws Servicem8ApiException
     */
    public function listLocations(ListLocationsRequest $request = new ListLocationsRequest(), ?array $options = null): ?array
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->filter != null) {
            $query['$filter'] = $request->filter;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "location.json",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return JsonDecoder::decodeArray($json, [Location::class]); // @phpstan-ignore-line
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

    /**
     *
     *
     * #### OAuth Scope
     * This endpoint requires the following OAuth scope **manage_locations**.
     *
     *
     *
     * #### Record UUID
     * UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.
     *
     *
     *
     * @param LocationCreate $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?Result
     * @throws Servicem8Exception
     * @throws Servicem8ApiException
     */
    public function createLocations(LocationCreate $request, ?array $options = null): ?Result
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "location.json",
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
                return Result::fromJson($json);
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

    /**
     *
     *
     * #### OAuth Scope
     * This endpoint requires the following OAuth scope **read_locations**.
     *
     *
     *
     * @param string $uuid UUID of the Location
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?Location
     * @throws Servicem8Exception
     * @throws Servicem8ApiException
     */
    public function getLocations(string $uuid, ?array $options = null): ?Location
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "location/{$uuid}.json",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return Location::fromJson($json);
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

    /**
     *
     *
     * #### OAuth Scope
     * This endpoint requires the following OAuth scope **manage_locations**.
     *
     *
     *
     * @param string $uuid UUID of the Location
     * @param UpdateLocationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?Result
     * @throws Servicem8Exception
     * @throws Servicem8ApiException
     */
    public function updateLocations(string $uuid, UpdateLocationsRequest $request, ?array $options = null): ?Result
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "location/{$uuid}.json",
                    method: HttpMethod::POST,
                    body: $request->body,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return Result::fromJson($json);
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

    /**
     *
     *
     * In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.
     *
     *
     *
     * #### OAuth Scope
     * This endpoint requires the following OAuth scope **manage_locations**.
     *
     *
     *
     * @param string $uuid UUID of the Location
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?Result
     * @throws Servicem8Exception
     * @throws Servicem8ApiException
     */
    public function deleteLocations(string $uuid, ?array $options = null): ?Result
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "location/{$uuid}.json",
                    method: HttpMethod::DELETE,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return Result::fromJson($json);
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
