<?php

namespace ServiceM8\StaffTimeEvents;

use Psr\Http\Client\ClientInterface;
use ServiceM8\Core\Client\RawClient;
use ServiceM8\StaffTimeEvents\Requests\ListStaffTimeEventsRequest;
use ServiceM8\Types\StaffTimeEvent;
use ServiceM8\Exceptions\Servicem8Exception;
use ServiceM8\Exceptions\Servicem8ApiException;
use ServiceM8\Core\Json\JsonApiRequest;
use ServiceM8\Environments;
use ServiceM8\Core\Client\HttpMethod;
use ServiceM8\Core\Json\JsonDecoder;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;

class StaffTimeEventsClient
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
     * Staff clock-on, clock-off and lunch-break events, separate from job check-in activity. These are historical events, not a current clock-on status indicator.
     *
     * Read events using an API key with read access or OAuth with `read_staff_time_events`. Filter by `staff_uuid`, `event_name` or `timestamp` using `$filter`.
     *
     * This endpoint is read-only. Creating, updating, deleting or restoring events through the REST API is not supported. Use Team Timesheet to correct recorded shifts. Event timestamps are returned in the account timezone, in `YYYY-MM-DD HH:MM:SS` format.
     *
     *
     *
     * #### Filtering
     * This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
     *
     *
     * #### OAuth Scope
     * This endpoint requires the following OAuth scope **read_staff_time_events**.
     *
     *
     *
     * @param ListStaffTimeEventsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?array<StaffTimeEvent>
     * @throws Servicem8Exception
     * @throws Servicem8ApiException
     */
    public function listStaffTimeEvents(ListStaffTimeEventsRequest $request = new ListStaffTimeEventsRequest(), ?array $options = null): ?array
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
                    path: "stafftimeevent.json",
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
                return JsonDecoder::decodeArray($json, [StaffTimeEvent::class]); // @phpstan-ignore-line
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
     * Staff clock-on, clock-off and lunch-break events, separate from job check-in activity. These are historical events, not a current clock-on status indicator.
     *
     * Read events using an API key with read access or OAuth with `read_staff_time_events`. Filter by `staff_uuid`, `event_name` or `timestamp` using `$filter`.
     *
     * This endpoint is read-only. Creating, updating, deleting or restoring events through the REST API is not supported. Use Team Timesheet to correct recorded shifts. Event timestamps are returned in the account timezone, in `YYYY-MM-DD HH:MM:SS` format.
     *
     *
     *
     * #### OAuth Scope
     * This endpoint requires the following OAuth scope **read_staff_time_events**.
     *
     *
     *
     * @param string $uuid UUID of the Staff Time Event
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?StaffTimeEvent
     * @throws Servicem8Exception
     * @throws Servicem8ApiException
     */
    public function getStaffTimeEvents(string $uuid, ?array $options = null): ?StaffTimeEvent
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "stafftimeevent/{$uuid}.json",
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
                return StaffTimeEvent::fromJson($json);
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
