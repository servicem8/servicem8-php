<?php

namespace ServiceM8\Assets;

use Psr\Http\Client\ClientInterface;
use ServiceM8\Core\Client\RawClient;
use ServiceM8\Assets\Requests\ListAssetsRequest;
use ServiceM8\Types\Asset;
use ServiceM8\Exceptions\Servicem8Exception;
use ServiceM8\Exceptions\Servicem8ApiException;
use ServiceM8\Core\Json\JsonApiRequest;
use ServiceM8\Environments;
use ServiceM8\Core\Client\HttpMethod;
use ServiceM8\Core\Json\JsonDecoder;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use ServiceM8\Assets\Requests\AssetCreate;
use ServiceM8\Types\Result;

class AssetsClient
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
     * This endpoint requires the following OAuth scope **read_assets**.
     *
     *
     *
     * @param ListAssetsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?array<Asset>
     * @throws Servicem8Exception
     * @throws Servicem8ApiException
     */
    public function listAssets(ListAssetsRequest $request = new ListAssetsRequest(), ?array $options = null): ?array
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
                    path: "asset.json",
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
                return JsonDecoder::decodeArray($json, [Asset::class]); // @phpstan-ignore-line
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
     * This endpoint requires the following OAuth scope **read_assets**.
     *
     *
     *
     * @param string $uuid UUID of the Asset
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?Asset
     * @throws Servicem8Exception
     * @throws Servicem8ApiException
     */
    public function getAssets(string $uuid, ?array $options = null): ?Asset
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "asset/{$uuid}.json",
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
                return Asset::fromJson($json);
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
     * This endpoint requires the following OAuth scope **manage_assets**.
     *
     *
     *
     * @param string $uuidPathParam UUID of the Asset
     * @param AssetCreate $request
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
    public function updateAssets(string $uuidPathParam, AssetCreate $request = new AssetCreate(), ?array $options = null): ?Result
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "asset/{$uuidPathParam}.json",
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
     * In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.
     *
     *
     *
     * #### OAuth Scope
     * This endpoint requires the following OAuth scope **manage_assets**.
     *
     *
     *
     * @param string $uuid UUID of the Asset
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
    public function deleteAssets(string $uuid, ?array $options = null): ?Result
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "asset/{$uuid}.json",
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
