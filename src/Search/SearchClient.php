<?php

namespace ServiceM8\Search;

use Psr\Http\Client\ClientInterface;
use ServiceM8\Core\Client\RawClient;
use ServiceM8\Search\Requests\GeneralSearchRequest;
use ServiceM8\Types\SearchResponse;
use ServiceM8\Exceptions\Servicem8Exception;
use ServiceM8\Exceptions\Servicem8ApiException;
use ServiceM8\Core\Json\JsonApiRequest;
use ServiceM8\Environments;
use ServiceM8\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use ServiceM8\Search\Requests\JobEmbeddingSearchRequest;
use ServiceM8\Types\EmbeddingSearchResponse;
use ServiceM8\Search\Types\ObjectSearchRequestObjectType;
use ServiceM8\Search\Requests\ObjectSearchRequest;
use ServiceM8\Types\ObjectSearchResponse;

class SearchClient
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
     * Performs a text search across jobs, companies, and materials. Returns combined results sorted by relevance.
     *
     * @param GeneralSearchRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SearchResponse
     * @throws Servicem8Exception
     * @throws Servicem8ApiException
     */
    public function generalSearch(GeneralSearchRequest $request, ?array $options = null): ?SearchResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['q'] = $request->q;
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "search.json",
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
                return SearchResponse::fromJson($json);
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
     * Harness the power of advanced AI embeddings to revolutionise how you search through job data. This endpoint transforms your search query into high-dimensional vector embeddings, then intelligently matches it against our entire job database using semantic similarity algorithms.
     *
     * How it works:
     * 1. AI Query Understanding - Your search terms are processed through neural embedding models that understand context, intent, and meaning
     * 2. Vector-Based Matching - The system compares your query against vector representations of all job content in real-time
     * 3. Intelligent Ranking - Returns results ranked by semantic similarity, not just keyword matching
     *
     * Why this matters:
     * - Find jobs about "plumbing repairs" even when searching for "fixing pipes"
     * - Discover relevant work orders that use different terminology but share the same intent
     * - Uncover hidden patterns and connections in your job data that traditional search would miss
     *
     * This isn't just search—it's AI that truly understands what you're looking for and delivers the most relevant results, even when the exact words don't match.
     *
     * @param JobEmbeddingSearchRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?EmbeddingSearchResponse
     * @throws Servicem8Exception
     * @throws Servicem8ApiException
     */
    public function jobEmbeddingSearch(JobEmbeddingSearchRequest $request, ?array $options = null): ?EmbeddingSearchResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['q'] = $request->q;
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        if ($request->similarityThreshold != null) {
            $query['similarity_threshold'] = $request->similarityThreshold;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "search/job/embedding.json",
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
                return EmbeddingSearchResponse::fromJson($json);
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
     * Performs a text search within a specific object type. Supported types: job, company, material, knowledgearticle, attachment, formresponse, asset, materialbundle
     *
     * @param value-of<ObjectSearchRequestObjectType> $objectType Type of object to search
     * @param ObjectSearchRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ObjectSearchResponse
     * @throws Servicem8Exception
     * @throws Servicem8ApiException
     */
    public function objectSearch(string $objectType, ObjectSearchRequest $request, ?array $options = null): ?ObjectSearchResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        $query['q'] = $request->q;
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "search/{$objectType}.json",
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
                return ObjectSearchResponse::fromJson($json);
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
