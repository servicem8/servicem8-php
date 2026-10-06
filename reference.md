# Reference
## ServiceTemplates
<details><summary><code>$client-&gt;serviceTemplates-&gt;listServiceTemplates($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Lists editable and published Service records, including inactive records. Filtering applies to top-level Service fields only.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->serviceTemplates->listServiceTemplates(
    new ListServiceTemplatesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$cursor:** `?string` — Set to -1 on the first request to enable cursor pagination. Use the x-next-cursor response header value for the next page.
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Maximum records to return when cursor pagination is enabled.
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?string` — OData-style filter on top-level Service fields.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;serviceTemplates-&gt;getServiceTemplate($uuid) -> ?ServiceTemplate</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Retrieves one editable or published Service record by UUID.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->serviceTemplates->getServiceTemplate(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — Service UUID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;serviceTemplates-&gt;upsertServiceTemplate($uuid, $request) -> ?ServiceTemplate</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Creates or sparsely updates an editable Service record. Published-copy UUIDs and publishing fields are rejected.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->serviceTemplates->upsertServiceTemplate(
    'uuid',
    new ServiceTemplateUpsertRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — Service UUID
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` — Customer-visible service name.
    
</dd>
</dl>

<dl>
<dd>

**$serviceType:** `?string` — Service workflow type stored on the Service DBO.
    
</dd>
</dl>

<dl>
<dd>

**$bookingType:** `?string` — How bookings for this service are scheduled.
    
</dd>
</dl>

<dl>
<dd>

**$pricingMethod:** `?string` — Pricing model used when quoting or booking this service.
    
</dd>
</dl>

<dl>
<dd>

**$serviceDescription:** `?string` — Customer-facing description shown before booking.
    
</dd>
</dl>

<dl>
<dd>

**$jobDescription:** `?string` — Default job description copied onto jobs created from this service.
    
</dd>
</dl>

<dl>
<dd>

**$workDoneDescription:** `?string` — Default work done description copied onto completed jobs.
    
</dd>
</dl>

<dl>
<dd>

**$jobCategoryUuid:** `?string` — Job category UUID assigned to jobs created from this service.
    
</dd>
</dl>

<dl>
<dd>

**$jobBadgesJson:** `?string` — JSON-encoded badge configuration stored on the Service DBO.
    
</dd>
</dl>

<dl>
<dd>

**$paymentTerms:** `?array` — Payment terms object stored as payment_terms_json.
    
</dd>
</dl>

<dl>
<dd>

**$isAvailableForCustomerBooking:** `?int` — Whether this service is available through customer booking flows.
    
</dd>
</dl>

<dl>
<dd>

**$minimumCustomerBookingLeadTimeMinutes:** `?int` — Minimum lead time before a customer can book this service.
    
</dd>
</dl>

<dl>
<dd>

**$maximumCustomerBookingLeadTimeMinutes:** `?int` — Maximum lead time ahead that a customer can book this service.
    
</dd>
</dl>

<dl>
<dd>

**$active:** `?int` — Soft-delete flag; set to 0 to deactivate the service.
    
</dd>
</dl>

<dl>
<dd>

**$questions:** `?array` — Sparse question changes; omitted existing questions are untouched.
    
</dd>
</dl>

<dl>
<dd>

**$variations:** `?array` — Sparse variation changes; omitted existing variations are untouched.
    
</dd>
</dl>

<dl>
<dd>

**$staffCapabilities:** `?array` — Sparse staff capability changes; omitted existing capabilities are untouched.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;serviceTemplates-&gt;deleteServiceTemplate($uuid) -> ?EmptyObject</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Sets active=0. Deleting an editable row also soft-deletes its published copy via the existing Service postCommit cascade; deleting a published-copy UUID only deactivates that published row.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->serviceTemplates->deleteServiceTemplate(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — Service UUID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Allocation Windows
<details><summary><code>$client-&gt;allocationWindows-&gt;listAllocationWindows($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_schedule**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->allocationWindows->listAllocationWindows(
    new ListAllocationWindowsRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;allocationWindows-&gt;createAllocationWindows($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_schedule**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->allocationWindows->createAllocationWindows(
    new AllocationWindowCreate([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `AllocationWindowCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;allocationWindows-&gt;getAllocationWindows($uuid) -> ?AllocationWindow</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_schedule**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->allocationWindows->getAllocationWindows(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Allocation Window
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;allocationWindows-&gt;updateAllocationWindows($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_schedule**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->allocationWindows->updateAllocationWindows(
    'uuid',
    new UpdateAllocationWindowsRequest([
        'body' => new AllocationWindowCreate([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Allocation Window
    
</dd>
</dl>

<dl>
<dd>

**$request:** `AllocationWindowCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;allocationWindows-&gt;deleteAllocationWindows($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_schedule**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->allocationWindows->deleteAllocationWindows(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Allocation Window
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Assets
<details><summary><code>$client-&gt;assets-&gt;listAssets($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_assets**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assets->listAssets(
    new ListAssetsRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assets-&gt;getAssets($uuid) -> ?Asset</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_assets**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assets->getAssets(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Asset
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assets-&gt;updateAssets($uuidPathParam, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_assets**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assets->updateAssets(
    'uuid',
    new AssetCreate([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuidPathParam:** `string` — UUID of the Asset
    
</dd>
</dl>

<dl>
<dd>

**$uuid:** `?string` — Unique identifier for this record
    
</dd>
</dl>

<dl>
<dd>

**$companyUuid:** `?string` — UUID of the Client to which this Asset is attached
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` — User-facing description of this asset
    
</dd>
</dl>

<dl>
<dd>

**$lat:** `?float` — Latitude component of the Asset's location in degrees
    
</dd>
</dl>

<dl>
<dd>

**$lng:** `?float` — Longitude component of the Asset's location in degrees
    
</dd>
</dl>

<dl>
<dd>

**$geoTimestamp:** `?string` — Timestamp at which the Asset's location was last updated
    
</dd>
</dl>

<dl>
<dd>

**$altitude:** `?float` — Altitude component of the Asset's location in metres
    
</dd>
</dl>

<dl>
<dd>

**$fieldData:** `?array` — JSON array containing field values for this asset. Each entry represents a field value defined by the associated AssetType, with field values stored as strings. Date fields use Y-m-d format. This field stores all custom fields defined in the asset type template.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assets-&gt;deleteAssets($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_assets**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assets->deleteAssets(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Asset
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Asset Types
<details><summary><code>$client-&gt;assetTypes-&gt;listAssetTypes($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_assets**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assetTypes->listAssetTypes(
    new ListAssetTypesRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assetTypes-&gt;createAssetTypes($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_assets**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assetTypes->createAssetTypes(
    new AssetTypeCreate([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `AssetTypeCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assetTypes-&gt;getAssetTypes($uuid) -> ?AssetType</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_assets**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assetTypes->getAssetTypes(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Asset Type
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assetTypes-&gt;updateAssetTypes($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_assets**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assetTypes->updateAssetTypes(
    'uuid',
    new UpdateAssetTypesRequest([
        'body' => new AssetTypeCreate([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Asset Type
    
</dd>
</dl>

<dl>
<dd>

**$request:** `AssetTypeCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assetTypes-&gt;deleteAssetTypes($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_assets**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assetTypes->deleteAssetTypes(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Asset Type
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Asset Type Fields
<details><summary><code>$client-&gt;assetTypeFields-&gt;listAssetTypeFields($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_assets**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assetTypeFields->listAssetTypeFields(
    new ListAssetTypeFieldsRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assetTypeFields-&gt;createAssetTypeFields($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_assets**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assetTypeFields->createAssetTypeFields(
    new AssetTypeFieldCreate([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `AssetTypeFieldCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assetTypeFields-&gt;getAssetTypeFields($uuid) -> ?AssetTypeField</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_assets**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assetTypeFields->getAssetTypeFields(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Asset Type Field
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assetTypeFields-&gt;updateAssetTypeFields($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_assets**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assetTypeFields->updateAssetTypeFields(
    'uuid',
    new UpdateAssetTypeFieldsRequest([
        'body' => new AssetTypeFieldCreate([
            'name' => 'name',
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Asset Type Field
    
</dd>
</dl>

<dl>
<dd>

**$request:** `AssetTypeFieldCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assetTypeFields-&gt;deleteAssetTypeFields($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_assets**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assetTypeFields->deleteAssetTypeFields(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Asset Type Field
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Attachments
<details><summary><code>$client-&gt;attachments-&gt;listAttachments($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_attachments**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->attachments->listAttachments(
    new ListAttachmentsRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;attachments-&gt;createAttachments($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_attachments**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->attachments->createAttachments(
    new AttachmentCreate([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `AttachmentCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;attachments-&gt;downloadAttachmentFile($uuid)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Retrieve the binary file associated with an Attachment. Authenticate the API request with an API key or an OAuth token with `read_attachments`. The API returns a `302` redirect; follow the `Location` header to retrieve the file bytes from storage. The redirect target may be on another host: do not forward your ServiceM8 API credentials to it. Treat the returned URL as temporary and request this endpoint again for a fresh URL when needed. The file response uses the stored file's content type, rather than the Attachment JSON metadata schema.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->attachments->downloadAttachmentFile(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of an existing Attachment record.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;attachments-&gt;uploadAttachmentFile($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Upload file data to an existing Attachment as the second step of the supported legacy two-request workflow. First POST JSON metadata to `/attachment.json`, including `related_object`, `related_object_uuid`, and `file_type` (for example, `.pdf`), then use the returned `x-record-uuid` here. Send the non-empty file bytes as an `application/octet-stream` request body, or send one file using `multipart/form-data`. For raw uploads the existing record supplies the file extension; for multipart uploads include the extension in the uploaded filename and ensure it matches the record's file type. Authenticate with an API key or an OAuth token with `manage_attachments`. Send `Accept: application/json` for the JSON success response; legacy clients may receive a text/html response. For new integrations, use the single multipart POST to `/attachment.json` described in the [attachment guide](https://developer.servicem8.com/docs/attaching-files-to-a-job-diary).
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->attachments->uploadAttachmentFile($uuid): ?Result;
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of an existing Attachment record.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;attachments-&gt;getAttachments($uuid) -> ?Attachment</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_attachments**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->attachments->getAttachments(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Attachment
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;attachments-&gt;updateAttachments($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_attachments**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->attachments->updateAttachments(
    'uuid',
    new UpdateAttachmentsRequest([
        'body' => new AttachmentCreate([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Attachment
    
</dd>
</dl>

<dl>
<dd>

**$request:** `AttachmentCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;attachments-&gt;deleteAttachments($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_attachments**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->attachments->deleteAttachments(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Attachment
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Availabilities
<details><summary><code>$client-&gt;availabilities-&gt;listAvailabilities($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_schedule**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->availabilities->listAvailabilities(
    new ListAvailabilitiesRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;availabilities-&gt;createAvailabilities($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_schedule**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->availabilities->createAvailabilities(
    new AvailabilityCreate([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `AvailabilityCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;availabilities-&gt;getAvailabilities($uuid) -> ?Availability</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_schedule**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->availabilities->getAvailabilities(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Availability
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;availabilities-&gt;updateAvailabilities($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_schedule**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->availabilities->updateAvailabilities(
    'uuid',
    new UpdateAvailabilitiesRequest([
        'body' => new AvailabilityCreate([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Availability
    
</dd>
</dl>

<dl>
<dd>

**$request:** `AvailabilityCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;availabilities-&gt;deleteAvailabilities($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_schedule**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->availabilities->deleteAvailabilities(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Availability
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Badges
<details><summary><code>$client-&gt;badges-&gt;listBadges($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_badges**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->badges->listBadges(
    new ListBadgesRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;badges-&gt;createBadges($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_badges**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->badges->createBadges(
    new BadgeCreate([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `BadgeCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;badges-&gt;getBadges($uuid) -> ?Badge</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_badges**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->badges->getBadges(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Badge
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;badges-&gt;updateBadges($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_badges**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->badges->updateBadges(
    'uuid',
    new UpdateBadgesRequest([
        'body' => new BadgeCreate([
            'name' => 'name',
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Badge
    
</dd>
</dl>

<dl>
<dd>

**$request:** `BadgeCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;badges-&gt;deleteBadges($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_badges**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->badges->deleteBadges(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Badge
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Categories
<details><summary><code>$client-&gt;categories-&gt;listCategories($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_job_categories**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->categories->listCategories(
    new ListCategoriesRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;categories-&gt;createCategories($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_job_categories**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->categories->createCategories(
    new CategoryCreate([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `CategoryCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;categories-&gt;getCategories($uuid) -> ?Category</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_job_categories**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->categories->getCategories(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Category
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;categories-&gt;updateCategories($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_job_categories**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->categories->updateCategories(
    'uuid',
    new UpdateCategoriesRequest([
        'body' => new CategoryCreate([
            'name' => 'name',
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Category
    
</dd>
</dl>

<dl>
<dd>

**$request:** `CategoryCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;categories-&gt;deleteCategories($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_job_categories**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->categories->deleteCategories(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Category
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Clients
<details><summary><code>$client-&gt;clients-&gt;listClients($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_customers**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->clients->listClients(
    new ListClientsRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;clients-&gt;createClients($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_customers**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->clients->createClients(
    new CompanyCreate([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `CompanyCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;clients-&gt;getClients($uuid) -> ?Company</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_customers**.

			
			
#### Open in ServiceM8
Use `https://go.servicem8.com/OpenClient/{uuid}` to open this Client in the ServiceM8 web app. This is a web app URL, not a REST API endpoint. Users who are not signed in are redirected through login and then back to the requested Client. The signed-in staff member must have access to Clients.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->clients->getClients(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Client
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;clients-&gt;updateClients($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_customers**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->clients->updateClients(
    'uuid',
    new UpdateClientsRequest([
        'body' => new CompanyCreate([
            'name' => 'name',
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Client
    
</dd>
</dl>

<dl>
<dd>

**$request:** `CompanyCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;clients-&gt;deleteClients($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_customers**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->clients->deleteClients(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Client
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Company Contacts
<details><summary><code>$client-&gt;companyContacts-&gt;listCompanyContacts($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_customer_contacts**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->companyContacts->listCompanyContacts(
    new ListCompanyContactsRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;companyContacts-&gt;createCompanyContacts($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_customer_contacts**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->companyContacts->createCompanyContacts(
    new CompanyContactCreate([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `CompanyContactCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;companyContacts-&gt;getCompanyContacts($uuid) -> ?CompanyContact</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_customer_contacts**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->companyContacts->getCompanyContacts(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Company Contact
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;companyContacts-&gt;updateCompanyContacts($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_customer_contacts**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->companyContacts->updateCompanyContacts(
    'uuid',
    new UpdateCompanyContactsRequest([
        'body' => new CompanyContactCreate([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Company Contact
    
</dd>
</dl>

<dl>
<dd>

**$request:** `CompanyContactCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;companyContacts-&gt;deleteCompanyContacts($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_customer_contacts**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->companyContacts->deleteCompanyContacts(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Company Contact
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Notes
<details><summary><code>$client-&gt;notes-&gt;getNotes($uuid) -> ?Note</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_job_notes**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->notes->getNotes(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Note
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;notes-&gt;updateNotes($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **publish_job_notes**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->notes->updateNotes(
    'uuid',
    new UpdateNotesRequest([
        'body' => new NoteCreate([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Note
    
</dd>
</dl>

<dl>
<dd>

**$request:** `NoteCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;notes-&gt;deleteNotes($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **publish_job_notes**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->notes->deleteNotes(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Note
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;notes-&gt;listNotes($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_job_notes**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->notes->listNotes(
    new ListNotesRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;notes-&gt;createNotes($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **publish_job_notes**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->notes->createNotes(
    new NoteCreate([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `NoteCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Diary
<details><summary><code>$client-&gt;diary-&gt;createAddonDiaryItem($request) -> ?AddonDiaryItemCreateResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Creates an immutable plaintext item in a Job Diary, attributed to the authenticated Add-on. Add-ons cannot read, update, or delete Diary items through this endpoint.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->diary->createAddonDiaryItem(
    new AddonDiaryItemCreateRequest([
        'jobUuid' => 'job_uuid',
        'content' => 'content',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$jobUuid:** `string` — UUID of the Job whose Diary receives the item.
    
</dd>
</dl>

<dl>
<dd>

**$content:** `string` — Plaintext Diary item content. Markup is displayed literally.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Document Templates
<details><summary><code>$client-&gt;documentTemplates-&gt;listDocumentTemplates($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_templates**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->documentTemplates->listDocumentTemplates(
    new ListDocumentTemplatesRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;documentTemplates-&gt;createDocumentTemplates($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_templates**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->documentTemplates->createDocumentTemplates(
    new DocumentTemplateCreate([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `DocumentTemplateCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;documentTemplates-&gt;getDocumentTemplates($uuid) -> ?DocumentTemplate</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_templates**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->documentTemplates->getDocumentTemplates(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Document Template
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;documentTemplates-&gt;updateDocumentTemplates($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_templates**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->documentTemplates->updateDocumentTemplates(
    'uuid',
    new UpdateDocumentTemplatesRequest([
        'body' => new DocumentTemplateCreate([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Document Template
    
</dd>
</dl>

<dl>
<dd>

**$request:** `DocumentTemplateCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;documentTemplates-&gt;deleteDocumentTemplates($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_templates**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->documentTemplates->deleteDocumentTemplates(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Document Template
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Email
<details><summary><code>$client-&gt;email-&gt;listEmailMessages($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns merged inbound and outbound email history for jobs in the account.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->email->listEmailMessages(
    new ListEmailMessagesRequest([
        'filter' => 'direction eq inbound and related_object eq job',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$cursor:** `?string` — Cursor value for merged email pagination. Use -1 to start a cursor walk.
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Maximum number of records to return.
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?string` — OData filter expression. Supports eq conditions for direction, related_object, and related_object_uuid joined with and.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;email-&gt;getEmailMessage($uuid) -> ?EmailRecord</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns a single job email record by UUID.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->email->getEmailMessage(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the email record.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Email Templates
<details><summary><code>$client-&gt;emailTemplates-&gt;listEmailTemplates($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_templates**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->emailTemplates->listEmailTemplates(
    new ListEmailTemplatesRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;emailTemplates-&gt;createEmailTemplates($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_templates**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->emailTemplates->createEmailTemplates(
    new EmailTemplateCreate([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `EmailTemplateCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;emailTemplates-&gt;getEmailTemplates($uuid) -> ?EmailTemplate</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_templates**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->emailTemplates->getEmailTemplates(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Email Template
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;emailTemplates-&gt;updateEmailTemplates($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_templates**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->emailTemplates->updateEmailTemplates(
    'uuid',
    new UpdateEmailTemplatesRequest([
        'body' => new EmailTemplateCreate([
            'name' => 'name',
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Email Template
    
</dd>
</dl>

<dl>
<dd>

**$request:** `EmailTemplateCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;emailTemplates-&gt;deleteEmailTemplates($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_templates**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->emailTemplates->deleteEmailTemplates(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Email Template
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Feedback
<details><summary><code>$client-&gt;feedback-&gt;listFeedback($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_feedback**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->feedback->listFeedback(
    new ListFeedbackRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;feedback-&gt;createFeedback($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_feedback**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->feedback->createFeedback(
    new FeedbackCreate([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `FeedbackCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;feedback-&gt;getFeedback($uuid) -> ?Feedback</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_feedback**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->feedback->getFeedback(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Feedback
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;feedback-&gt;updateFeedback($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_feedback**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->feedback->updateFeedback(
    'uuid',
    new UpdateFeedbackRequest([
        'body' => new FeedbackCreate([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Feedback
    
</dd>
</dl>

<dl>
<dd>

**$request:** `FeedbackCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;feedback-&gt;deleteFeedback($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_feedback**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->feedback->deleteFeedback(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Feedback
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Forms
<details><summary><code>$client-&gt;forms-&gt;listForms($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_forms**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->forms->listForms(
    new ListFormsRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;forms-&gt;createForms($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_forms**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->forms->createForms(
    new FormCreate([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `FormCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;forms-&gt;getForms($uuid) -> ?Form</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_forms**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->forms->getForms(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Form
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;forms-&gt;updateForms($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_forms**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->forms->updateForms(
    'uuid',
    new UpdateFormsRequest([
        'body' => new FormCreate([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Form
    
</dd>
</dl>

<dl>
<dd>

**$request:** `FormCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;forms-&gt;deleteForms($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_forms**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->forms->deleteForms(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Form
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Form Fields
<details><summary><code>$client-&gt;formFields-&gt;listFormFields($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_forms**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->formFields->listFormFields(
    new ListFormFieldsRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;formFields-&gt;createFormFields($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_forms**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->formFields->createFormFields(
    new FormFieldCreate([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `FormFieldCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;formFields-&gt;getFormFields($uuid) -> ?FormField</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_forms**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->formFields->getFormFields(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Form Field
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;formFields-&gt;updateFormFields($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_forms**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->formFields->updateFormFields(
    'uuid',
    new UpdateFormFieldsRequest([
        'body' => new FormFieldCreate([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Form Field
    
</dd>
</dl>

<dl>
<dd>

**$request:** `FormFieldCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;formFields-&gt;deleteFormFields($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_forms**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->formFields->deleteFormFields(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Form Field
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Form Responses
<details><summary><code>$client-&gt;formResponses-&gt;listFormResponses($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_forms**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->formResponses->listFormResponses(
    new ListFormResponsesRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;formResponses-&gt;createFormResponses($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_forms**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->formResponses->createFormResponses(
    new FormResponseCreate([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `FormResponseCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;formResponses-&gt;getFormResponses($uuid) -> ?FormResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_forms**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->formResponses->getFormResponses(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Form Response
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;formResponses-&gt;updateFormResponses($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_forms**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->formResponses->updateFormResponses(
    'uuid',
    new UpdateFormResponsesRequest([
        'body' => new FormResponseCreate([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Form Response
    
</dd>
</dl>

<dl>
<dd>

**$request:** `FormResponseCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;formResponses-&gt;deleteFormResponses($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_forms**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->formResponses->deleteFormResponses(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Form Response
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Inbox
<details><summary><code>$client-&gt;inbox-&gt;listInboxMessages($request) -> ?InboxMessagesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Retrieves a paginated list of inbox messages with optional filtering
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inbox->listInboxMessages(
    new ListInboxMessagesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$limit:** `?int` — Maximum number of messages to return (1-500)
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Number of messages to skip for pagination
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?string` — Filter messages by status
    
</dd>
</dl>

<dl>
<dd>

**$search:** `?string` — Search messages by subject, from name, or from email
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inbox-&gt;createInboxMessage($request) -> ?InboxMessageDetail</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Creates a new inbox message that will appear in the inbox
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inbox->createInboxMessage(
    new CreateInboxMessageRequest([
        'subject' => 'subject',
        'messageText' => 'message_text',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$subject:** `string` — Subject of the message
    
</dd>
</dl>

<dl>
<dd>

**$messageText:** `string` — Plain text content of the message
    
</dd>
</dl>

<dl>
<dd>

**$fromName:** `?string` — Name of the sender
    
</dd>
</dl>

<dl>
<dd>

**$fromEmail:** `?string` — Email address of the sender
    
</dd>
</dl>

<dl>
<dd>

**$jsonData:** `?array` — Additional data to be used when converting the message to a job
    
</dd>
</dl>

<dl>
<dd>

**$jobData:** `?CreateInboxMessageRequestJobData` — Structured job data that will be merged into json_data when converting the message to a job
    
</dd>
</dl>

<dl>
<dd>

**$regardingCompanyUuid:** `?string` — UUID of the company this message is regarding
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inbox-&gt;getInboxMessage($uuid) -> ?InboxMessageDetail</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Retrieves detailed information about a specific inbox message including attachments and conversation history
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inbox->getInboxMessage(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the inbox message
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inbox-&gt;archiveInboxMessage($uuid, $request) -> ?SuccessResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Archives or unarchives an inbox message
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inbox->archiveInboxMessage(
    'uuid',
    new ArchiveRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the inbox message
    
</dd>
</dl>

<dl>
<dd>

**$archived:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$reason:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inbox-&gt;attachInboxMessageToJob($uuid, $request) -> ?AttachToJobResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Attaches an inbox message to an existing job
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inbox->attachInboxMessageToJob(
    'uuid',
    new AttachToJobRequest([
        'jobUuid' => 'job_uuid',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the inbox message
    
</dd>
</dl>

<dl>
<dd>

**$jobUuid:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inbox-&gt;convertInboxMessageToJob($uuid, $request) -> ?ConvertToJobResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Converts an inbox message into a new job, optionally using a job template
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inbox->convertInboxMessageToJob(
    'uuid',
    new ConvertToJobRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the inbox message
    
</dd>
</dl>

<dl>
<dd>

**$templateUuid:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$note:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inbox-&gt;addNoteToInboxMessage($uuid, $request) -> ?SuccessResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Adds a note to an inbox message
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inbox->addNoteToInboxMessage(
    'uuid',
    new AddNoteRequest([
        'note' => 'note',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the inbox message
    
</dd>
</dl>

<dl>
<dd>

**$note:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inbox-&gt;markInboxMessageAsRead($uuid) -> ?SuccessResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Marks an inbox message as read
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inbox->markInboxMessageAsRead(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the inbox message
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inbox-&gt;snoozeInboxMessage($uuid, $request) -> ?SuccessResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Snoozes a message until a specified date/time or unsnoozes it
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inbox->snoozeInboxMessage(
    'uuid',
    new SnoozeRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the inbox message
    
</dd>
</dl>

<dl>
<dd>

**$snoozeUntil:** `?DateTime` — ISO 8601 datetime to snooze until, or null to unsnooze
    
</dd>
</dl>

<dl>
<dd>

**$note:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Jobs
<details><summary><code>$client-&gt;jobs-&gt;listJobs($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_jobs**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobs->listJobs(
    new ListJobsRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobs-&gt;createJobs($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **create_jobs**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobs->createJobs(
    new JobCreate([
        'status' => JobCreateStatus::Quote->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `JobCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobs-&gt;getJobs($uuid) -> ?Job</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_jobs**.

			
			
#### Open in ServiceM8
Use `https://go.servicem8.com/OpenJob/{uuid}` to open this Job in the ServiceM8 web app. This is a web app URL, not a REST API endpoint. Users who are not signed in are redirected through login and then back to the requested Job. The signed-in staff member must have access to the Job and Dispatch Board.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobs->getJobs(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobs-&gt;updateJobs($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_jobs**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobs->updateJobs(
    'uuid',
    new UpdateJobsRequest([
        'body' => new JobCreate([
            'status' => JobCreateStatus::Quote->value,
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job
    
</dd>
</dl>

<dl>
<dd>

**$request:** `JobCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobs-&gt;deleteJobs($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_jobs**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobs->deleteJobs(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Job Activities
<details><summary><code>$client-&gt;jobActivities-&gt;listJobActivities($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_schedule**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobActivities->listJobActivities(
    new ListJobActivitiesRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobActivities-&gt;createJobActivities($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_schedule**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobActivities->createJobActivities(
    new JobActivityCreate([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `JobActivityCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobActivities-&gt;getJobActivities($uuid) -> ?JobActivity</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_schedule**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobActivities->getJobActivities(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Activity
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobActivities-&gt;updateJobActivities($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_schedule**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobActivities->updateJobActivities(
    'uuid',
    new UpdateJobActivitiesRequest([
        'body' => new JobActivityCreate([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Activity
    
</dd>
</dl>

<dl>
<dd>

**$request:** `JobActivityCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobActivities-&gt;deleteJobActivities($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_schedule**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobActivities->deleteJobActivities(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Activity
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobActivities-&gt;listJobAdminActivities($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_job_admin_activity**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobActivities->listJobAdminActivities(
    new ListJobAdminActivitiesRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobActivities-&gt;getJobAdminActivities($uuid) -> ?JobAdminActivity</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_job_admin_activity**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobActivities->getJobAdminActivities(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Activity
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Job Allocations
<details><summary><code>$client-&gt;jobAllocations-&gt;listJobAllocations($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_schedule**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobAllocations->listJobAllocations(
    new ListJobAllocationsRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobAllocations-&gt;createJobAllocations($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_schedule**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobAllocations->createJobAllocations(
    new JobAllocationCreate([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `JobAllocationCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobAllocations-&gt;getJobAllocations($uuid) -> ?JobAllocation</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_schedule**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobAllocations->getJobAllocations(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Allocation
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobAllocations-&gt;updateJobAllocations($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_schedule**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobAllocations->updateJobAllocations(
    'uuid',
    new UpdateJobAllocationsRequest([
        'body' => new JobAllocationCreate([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Allocation
    
</dd>
</dl>

<dl>
<dd>

**$request:** `JobAllocationCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobAllocations-&gt;deleteJobAllocations($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_schedule**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobAllocations->deleteJobAllocations(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Allocation
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Job Checklists
<details><summary><code>$client-&gt;jobChecklists-&gt;listJobChecklists($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_job_checklists**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobChecklists->listJobChecklists(
    new ListJobChecklistsRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobChecklists-&gt;createJobChecklists($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_job_checklists**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobChecklists->createJobChecklists(
    new JobChecklistCreate([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `JobChecklistCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobChecklists-&gt;getJobChecklists($uuid) -> ?JobChecklist</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_job_checklists**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobChecklists->getJobChecklists(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Checklist
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobChecklists-&gt;updateJobChecklists($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_job_checklists**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobChecklists->updateJobChecklists(
    'uuid',
    new UpdateJobChecklistsRequest([
        'body' => new JobChecklistCreate([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Checklist
    
</dd>
</dl>

<dl>
<dd>

**$request:** `JobChecklistCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobChecklists-&gt;deleteJobChecklists($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_job_checklists**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobChecklists->deleteJobChecklists(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Checklist
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Job Contacts
<details><summary><code>$client-&gt;jobContacts-&gt;listJobContacts($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_job_contacts**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobContacts->listJobContacts(
    new ListJobContactsRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobContacts-&gt;createJobContacts($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_job_contacts**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobContacts->createJobContacts(
    new JobContactCreate([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `JobContactCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobContacts-&gt;getJobContacts($uuid) -> ?JobContact</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_job_contacts**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobContacts->getJobContacts(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Contact
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobContacts-&gt;updateJobContacts($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_job_contacts**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobContacts->updateJobContacts(
    'uuid',
    new UpdateJobContactsRequest([
        'body' => new JobContactCreate([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Contact
    
</dd>
</dl>

<dl>
<dd>

**$request:** `JobContactCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobContacts-&gt;deleteJobContacts($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_job_contacts**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobContacts->deleteJobContacts(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Contact
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Job Materials
<details><summary><code>$client-&gt;jobMaterials-&gt;listJobMaterials($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_job_materials**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobMaterials->listJobMaterials(
    new ListJobMaterialsRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobMaterials-&gt;createJobMaterials($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_job_materials**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobMaterials->createJobMaterials(
    new JobMaterialCreate([
        'quantity' => 'quantity',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `JobMaterialCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobMaterials-&gt;getJobMaterials($uuid) -> ?JobMaterial</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_job_materials**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobMaterials->getJobMaterials(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Material
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobMaterials-&gt;updateJobMaterials($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_job_materials**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobMaterials->updateJobMaterials(
    'uuid',
    new UpdateJobMaterialsRequest([
        'body' => new JobMaterialCreate([
            'quantity' => 'quantity',
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Material
    
</dd>
</dl>

<dl>
<dd>

**$request:** `JobMaterialCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobMaterials-&gt;deleteJobMaterials($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_job_materials**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobMaterials->deleteJobMaterials(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Material
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Job Material Bundles
<details><summary><code>$client-&gt;jobMaterialBundles-&gt;listJobMaterialBundles($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_job_materials**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobMaterialBundles->listJobMaterialBundles(
    new ListJobMaterialBundlesRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobMaterialBundles-&gt;createJobMaterialBundles($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_job_materials**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobMaterialBundles->createJobMaterialBundles(
    new JobMaterialBundleCreate([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `JobMaterialBundleCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobMaterialBundles-&gt;getJobMaterialBundles($uuid) -> ?JobMaterialBundle</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_job_materials**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobMaterialBundles->getJobMaterialBundles(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Material Bundle
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobMaterialBundles-&gt;updateJobMaterialBundles($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_job_materials**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobMaterialBundles->updateJobMaterialBundles(
    'uuid',
    new UpdateJobMaterialBundlesRequest([
        'body' => new JobMaterialBundleCreate([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Material Bundle
    
</dd>
</dl>

<dl>
<dd>

**$request:** `JobMaterialBundleCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobMaterialBundles-&gt;deleteJobMaterialBundles($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_job_materials**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobMaterialBundles->deleteJobMaterialBundles(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Material Bundle
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Job Payments
<details><summary><code>$client-&gt;jobPayments-&gt;listJobPayments($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_job_payments**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobPayments->listJobPayments(
    new ListJobPaymentsRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobPayments-&gt;createJobPayments($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_job_payments**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobPayments->createJobPayments(
    new JobPaymentCreate([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `JobPaymentCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobPayments-&gt;getJobPayments($uuid) -> ?JobPayment</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_job_payments**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobPayments->getJobPayments(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Payment
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobPayments-&gt;updateJobPayments($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_job_payments**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobPayments->updateJobPayments(
    'uuid',
    new UpdateJobPaymentsRequest([
        'body' => new JobPaymentCreate([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Payment
    
</dd>
</dl>

<dl>
<dd>

**$request:** `JobPaymentCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobPayments-&gt;deleteJobPayments($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_job_payments**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobPayments->deleteJobPayments(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Payment
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Job Templates
<details><summary><code>$client-&gt;jobTemplates-&gt;listJobTemplates($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_jobs**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobTemplates->listJobTemplates(
    new ListJobTemplatesRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobTemplates-&gt;getJobTemplates($uuid) -> ?JobTemplate</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_jobs**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobTemplates->getJobTemplates(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Template
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobTemplates-&gt;createJobFromTemplate($uuid, $request) -> ?CreateJobFromTemplateResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Creates a new job by cloning an existing job template. All template entities (tasks, materials, checklists, quotes, custom fields) are cloned to the new job.

#### Field Overrides
Only the following fields can be overridden when creating a job from a template:
- `job_description` - Job description
- `company_uuid` - UUID of the company/client
- `company_name` - Name of the company/client (will lookup existing or create new)
- `job_address` - Street address for the job

**Note:** You cannot specify both `company_uuid` and `company_name`. If `company_name` is provided, the system will first search for an existing company with that name. If found, it will use that company's UUID. If not found, a new company will be created.

Any other fields in the request body will be ignored.

#### OAuth Scope
This endpoint requires the following OAuth scope **create_jobs**.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobTemplates->createJobFromTemplate(
    '550e8400-e29b-41d4-a716-446655440000',
    new JobTemplateOverrides([
        'companyUuid' => '550e8400-e29b-41d4-a716-446655440001',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the job template to clone from
    
</dd>
</dl>

<dl>
<dd>

**$jobDescription:** `?string` — Job description
    
</dd>
</dl>

<dl>
<dd>

**$companyUuid:** `?string` — UUID of the company/client. Cannot be used together with company_name.
    
</dd>
</dl>

<dl>
<dd>

**$companyName:** `?string` — Name of the company/client. If a company with this name exists, it will be used. Otherwise, a new company will be created. Cannot be used together with company_uuid.
    
</dd>
</dl>

<dl>
<dd>

**$jobAddress:** `?string` — Street address for the job
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Knowledge Articles
<details><summary><code>$client-&gt;knowledgeArticles-&gt;listKnowledgeArticles($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_knowledge**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->knowledgeArticles->listKnowledgeArticles(
    new ListKnowledgeArticlesRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;knowledgeArticles-&gt;createKnowledgeArticles($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_knowledge**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->knowledgeArticles->createKnowledgeArticles(
    new KnowledgeArticleCreate([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `KnowledgeArticleCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;knowledgeArticles-&gt;getKnowledgeArticles($uuid) -> ?KnowledgeArticle</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_knowledge**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->knowledgeArticles->getKnowledgeArticles(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Knowledge Article
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;knowledgeArticles-&gt;updateKnowledgeArticles($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_knowledge**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->knowledgeArticles->updateKnowledgeArticles(
    'uuid',
    new UpdateKnowledgeArticlesRequest([
        'body' => new KnowledgeArticleCreate([
            'name' => 'name',
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Knowledge Article
    
</dd>
</dl>

<dl>
<dd>

**$request:** `KnowledgeArticleCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;knowledgeArticles-&gt;deleteKnowledgeArticles($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_knowledge**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->knowledgeArticles->deleteKnowledgeArticles(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Knowledge Article
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Locations
<details><summary><code>$client-&gt;locations-&gt;listLocations($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_locations**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->locations->listLocations(
    new ListLocationsRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;locations-&gt;createLocations($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_locations**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->locations->createLocations(
    new LocationCreate([
        'name' => 'name',
        'state' => 'state',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `LocationCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;locations-&gt;getLocations($uuid) -> ?Location</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_locations**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->locations->getLocations(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Location
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;locations-&gt;updateLocations($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_locations**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->locations->updateLocations(
    'uuid',
    new UpdateLocationsRequest([
        'body' => new LocationCreate([
            'name' => 'name',
            'state' => 'state',
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Location
    
</dd>
</dl>

<dl>
<dd>

**$request:** `LocationCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;locations-&gt;deleteLocations($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_locations**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->locations->deleteLocations(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Location
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Materials
<details><summary><code>$client-&gt;materials-&gt;listMaterials($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_inventory**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->materials->listMaterials(
    new ListMaterialsRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;materials-&gt;createMaterials($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_inventory**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->materials->createMaterials(
    new MaterialCreate([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `MaterialCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;materials-&gt;getMaterials($uuid) -> ?Material</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_inventory**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->materials->getMaterials(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Material
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;materials-&gt;updateMaterials($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_inventory**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->materials->updateMaterials(
    'uuid',
    new UpdateMaterialsRequest([
        'body' => new MaterialCreate([
            'name' => 'name',
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Material
    
</dd>
</dl>

<dl>
<dd>

**$request:** `MaterialCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;materials-&gt;deleteMaterials($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_inventory**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->materials->deleteMaterials(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Material
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Bundles
<details><summary><code>$client-&gt;bundles-&gt;listBundles($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_inventory**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bundles->listBundles(
    new ListBundlesRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bundles-&gt;createBundles($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_inventory**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bundles->createBundles(
    new MaterialBundleCreate([
        'itemNumber' => 'item_number',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `MaterialBundleCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bundles-&gt;getBundles($uuid) -> ?MaterialBundle</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_inventory**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bundles->getBundles(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Bundle
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bundles-&gt;updateBundles($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_inventory**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bundles->updateBundles(
    'uuid',
    new UpdateBundlesRequest([
        'body' => new MaterialBundleCreate([
            'itemNumber' => 'item_number',
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Bundle
    
</dd>
</dl>

<dl>
<dd>

**$request:** `MaterialBundleCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bundles-&gt;deleteBundles($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_inventory**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bundles->deleteBundles(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Bundle
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Notifications
<details><summary><code>$client-&gt;notifications-&gt;createNotification($request) -> ?NotificationCreateResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Sends a notification from the calling add-on to each supplied staff recipient.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->notifications->createNotification(
    new NotificationCreateRequest([
        'recipientStaffUuids' => [
            'recipient_staff_uuids',
        ],
        'message' => 'message',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$recipientStaffUuids:** `array` 
    
</dd>
</dl>

<dl>
<dd>

**$message:** `string` — Notification message. Supports a limited HTML subset: b, i, br.
    
</dd>
</dl>

<dl>
<dd>

**$title:** `?string` — Optional notification title. HTML is not supported.
    
</dd>
</dl>

<dl>
<dd>

**$destinationUrl:** `?string` — Supported servicem8:// route: job/{uuid}, job/{uuid}/diary, or inbox/{uuid}.
    
</dd>
</dl>

<dl>
<dd>

**$urgency:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Job Queues
<details><summary><code>$client-&gt;jobQueues-&gt;listJobQueues($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_job_queues**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobQueues->listJobQueues(
    new ListJobQueuesRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobQueues-&gt;createJobQueues($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_job_queues**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobQueues->createJobQueues(
    new QueueCreate([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `QueueCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobQueues-&gt;getJobQueues($uuid) -> ?Queue</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_job_queues**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobQueues->getJobQueues(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Queue
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobQueues-&gt;updateJobQueues($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_job_queues**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobQueues->updateJobQueues(
    'uuid',
    new UpdateJobQueuesRequest([
        'body' => new QueueCreate([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Queue
    
</dd>
</dl>

<dl>
<dd>

**$request:** `QueueCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;jobQueues-&gt;deleteJobQueues($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_job_queues**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->jobQueues->deleteJobQueues(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Job Queue
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Search
<details><summary><code>$client-&gt;search-&gt;generalSearch($request) -> ?SearchResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Performs a text search across jobs, companies, and materials. Returns combined results sorted by relevance.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->search->generalSearch(
    new GeneralSearchRequest([
        'q' => 'plumbing repair',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$q:** `string` — Search query string
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Maximum number of results to return (max 50)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;search-&gt;jobEmbeddingSearch($request) -> ?EmbeddingSearchResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Harness the power of advanced AI embeddings to revolutionise how you search through job data. This endpoint transforms your search query into high-dimensional vector embeddings, then intelligently matches it against our entire job database using semantic similarity algorithms.

How it works:
1. AI Query Understanding - Your search terms are processed through neural embedding models that understand context, intent, and meaning
2. Vector-Based Matching - The system compares your query against vector representations of all job content in real-time
3. Intelligent Ranking - Returns results ranked by semantic similarity, not just keyword matching

Why this matters:
- Find jobs about "plumbing repairs" even when searching for "fixing pipes"
- Discover relevant work orders that use different terminology but share the same intent
- Uncover hidden patterns and connections in your job data that traditional search would miss

This isn't just search—it's AI that truly understands what you're looking for and delivers the most relevant results, even when the exact words don't match.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->search->jobEmbeddingSearch(
    new JobEmbeddingSearchRequest([
        'q' => 'replace hot water system',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$q:** `string` — Search query string
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Maximum number of results to return (max 50)
    
</dd>
</dl>

<dl>
<dd>

**$similarityThreshold:** `?float` — Minimum similarity score (0.0 to 1.0)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;search-&gt;objectSearch($objectType, $request) -> ?ObjectSearchResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Performs a text search within a specific object type. Supported types: job, company, material, knowledgearticle, attachment, formresponse, asset, materialbundle
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->search->objectSearch(
    ObjectSearchRequestObjectType::Job->value,
    new ObjectSearchRequest([
        'q' => 'emergency repair',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$objectType:** `string` — Type of object to search
    
</dd>
</dl>

<dl>
<dd>

**$q:** `string` — Search query string
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Maximum number of results to return (max 100)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Security Roles
<details><summary><code>$client-&gt;securityRoles-&gt;listSecurityRoles($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_security_roles**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->securityRoles->listSecurityRoles(
    new ListSecurityRolesRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;securityRoles-&gt;getSecurityRoles($uuid) -> ?SecurityRole</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_security_roles**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->securityRoles->getSecurityRoles(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Security Role
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Sms
<details><summary><code>$client-&gt;sms-&gt;listSmsMessages($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns merged inbound and outbound SMS history for jobs in the account.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sms->listSmsMessages(
    new ListSmsMessagesRequest([
        'filter' => 'direction eq inbound and related_object_uuid eq 5a2b1c0d-1234-4abc-9def-000000000001',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$cursor:** `?string` — Cursor value for merged SMS pagination. Use -1 to start a cursor walk.
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Maximum number of records to return.
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?string` — Limited OData filter. Supported fields: direction, related_object (job only), related_object_uuid. Conditions must use eq and may be joined with and.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sms-&gt;getSmsMessage($uuid) -> ?SmsRecord</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns a single merged job SMS record by UUID.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sms->getSmsMessage(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the SMS record.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## SMS Templates
<details><summary><code>$client-&gt;smsTemplates-&gt;listSmsTemplates($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_templates**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->smsTemplates->listSmsTemplates(
    new ListSmsTemplatesRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;smsTemplates-&gt;createSmsTemplates($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_templates**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->smsTemplates->createSmsTemplates(
    new SmsTemplateCreate([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `SmsTemplateCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;smsTemplates-&gt;getSmsTemplates($uuid) -> ?SmsTemplate</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_templates**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->smsTemplates->getSmsTemplates(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the SMS Template
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;smsTemplates-&gt;updateSmsTemplates($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_templates**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->smsTemplates->updateSmsTemplates(
    'uuid',
    new UpdateSmsTemplatesRequest([
        'body' => new SmsTemplateCreate([
            'name' => 'name',
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the SMS Template
    
</dd>
</dl>

<dl>
<dd>

**$request:** `SmsTemplateCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;smsTemplates-&gt;deleteSmsTemplates($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_templates**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->smsTemplates->deleteSmsTemplates(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the SMS Template
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Staff Members
<details><summary><code>$client-&gt;staffMembers-&gt;listStaffMembers($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_staff**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->staffMembers->listStaffMembers(
    new ListStaffMembersRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;staffMembers-&gt;createStaffMembers($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_staff**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->staffMembers->createStaffMembers(
    new StaffCreate([
        'first' => 'first',
        'last' => 'last',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `StaffCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;staffMembers-&gt;getStaffMembers($uuid) -> ?Staff</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_staff**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->staffMembers->getStaffMembers(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Staff Member
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;staffMembers-&gt;updateStaffMembers($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_staff**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->staffMembers->updateStaffMembers(
    'uuid',
    new UpdateStaffMembersRequest([
        'body' => new StaffCreate([
            'first' => 'first',
            'last' => 'last',
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Staff Member
    
</dd>
</dl>

<dl>
<dd>

**$request:** `StaffCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;staffMembers-&gt;deleteStaffMembers($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_staff**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->staffMembers->deleteStaffMembers(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Staff Member
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Staff Messages
<details><summary><code>$client-&gt;staffMessages-&gt;listStaffMessages($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_messages**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->staffMessages->listStaffMessages(
    new ListStaffMessagesRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;staffMessages-&gt;createStaffMessages($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **publish_messages**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header. Existing attachment UUIDs require the read_attachments OAuth scope; multipart file uploads additionally require manage_attachments.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->staffMessages->createStaffMessages(
    new StaffMessageCreate([
        'fromStaffUuid' => '123e4567-6068-7d94-8a1f-f155cedbd96b',
        'toStaffUuid' => '123e4567-6068-7d94-8a1e-e97b0533b2ab',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `StaffMessageCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;staffMessages-&gt;getStaffMessages($uuid) -> ?StaffMessage</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_messages**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->staffMessages->getStaffMessages(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Staff Message
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;staffMessages-&gt;updateStaffMessages($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **publish_messages**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->staffMessages->updateStaffMessages(
    'uuid',
    new UpdateStaffMessagesRequest([
        'body' => new StaffMessageCreate([
            'fromStaffUuid' => '123e4567-6068-7d94-8a1f-f155cedbd96b',
            'toStaffUuid' => '123e4567-6068-7d94-8a1e-e97b0533b2ab',
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Staff Message
    
</dd>
</dl>

<dl>
<dd>

**$request:** `StaffMessageCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;staffMessages-&gt;deleteStaffMessages($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **publish_messages**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->staffMessages->deleteStaffMessages(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Staff Message
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Staff Time Events
<details><summary><code>$client-&gt;staffTimeEvents-&gt;listStaffTimeEvents($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Staff clock-on, clock-off and lunch-break events, separate from job check-in activity. These are historical events, not a current clock-on status indicator.

Read events using an API key with read access or OAuth with `read_staff_time_events`. Filter by `staff_uuid`, `event_name` or `timestamp` using `$filter`.

This endpoint is read-only. Creating, updating, deleting or restoring events through the REST API is not supported. Use Team Timesheet to correct recorded shifts. Event timestamps are returned in the account timezone, in `YYYY-MM-DD HH:MM:SS` format.


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_staff_time_events**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->staffTimeEvents->listStaffTimeEvents(
    new ListStaffTimeEventsRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;staffTimeEvents-&gt;getStaffTimeEvents($uuid) -> ?StaffTimeEvent</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Staff clock-on, clock-off and lunch-break events, separate from job check-in activity. These are historical events, not a current clock-on status indicator.

Read events using an API key with read access or OAuth with `read_staff_time_events`. Filter by `staff_uuid`, `event_name` or `timestamp` using `$filter`.

This endpoint is read-only. Creating, updating, deleting or restoring events through the REST API is not supported. Use Team Timesheet to correct recorded shifts. Event timestamps are returned in the account timezone, in `YYYY-MM-DD HH:MM:SS` format.


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_staff_time_events**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->staffTimeEvents->getStaffTimeEvents(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Staff Time Event
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Suppliers
<details><summary><code>$client-&gt;suppliers-&gt;listSuppliers($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_suppliers**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->suppliers->listSuppliers(
    new ListSuppliersRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;suppliers-&gt;createSuppliers($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_suppliers**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->suppliers->createSuppliers(
    new SupplierCreate([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `SupplierCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;suppliers-&gt;getSuppliers($uuid) -> ?Supplier</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_suppliers**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->suppliers->getSuppliers(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Supplier
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;suppliers-&gt;updateSuppliers($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_suppliers**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->suppliers->updateSuppliers(
    'uuid',
    new UpdateSuppliersRequest([
        'body' => new SupplierCreate([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Supplier
    
</dd>
</dl>

<dl>
<dd>

**$request:** `SupplierCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;suppliers-&gt;deleteSuppliers($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_suppliers**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->suppliers->deleteSuppliers(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Supplier
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Tasks
<details><summary><code>$client-&gt;tasks-&gt;listTasks($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_tasks**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tasks->listTasks(
    new ListTasksRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;tasks-&gt;createTasks($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_tasks**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tasks->createTasks(
    new TaskCreate([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `TaskCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;tasks-&gt;getTasks($uuid) -> ?Task</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_tasks**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tasks->getTasks(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Task
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;tasks-&gt;updateTasks($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_tasks**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tasks->updateTasks(
    'uuid',
    new UpdateTasksRequest([
        'body' => new TaskCreate([
            'name' => 'name',
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Task
    
</dd>
</dl>

<dl>
<dd>

**$request:** `TaskCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;tasks-&gt;deleteTasks($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_tasks**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tasks->deleteTasks(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Task
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Tax Rates
<details><summary><code>$client-&gt;taxRates-&gt;listTaxRates($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_tax_rates**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->taxRates->listTaxRates(
    new ListTaxRatesRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;taxRates-&gt;createTaxRates($request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_tax_rates**.

			
			
#### Record UUID
UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the `x-record-uuid` response header.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->taxRates->createTaxRates(
    new TaxRateCreate([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `TaxRateCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;taxRates-&gt;getTaxRates($uuid) -> ?TaxRate</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **read_tax_rates**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->taxRates->getTaxRates(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Tax Rate
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;taxRates-&gt;updateTaxRates($uuid, $request) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_tax_rates**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->taxRates->updateTaxRates(
    'uuid',
    new UpdateTaxRatesRequest([
        'body' => new TaxRateCreate([
            'name' => 'name',
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Tax Rate
    
</dd>
</dl>

<dl>
<dd>

**$request:** `TaxRateCreate` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;taxRates-&gt;deleteTaxRates($uuid) -> ?Result</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>


			
In ServiceM8, deleting a record sets its `active` field to `0`. Inactive records are still accessible on the API, but are hidden in the UI. Inactive records can be restored by setting their `active` field to `1`.

			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **manage_tax_rates**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->taxRates->deleteTaxRates(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Tax Rate
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Vendors
<details><summary><code>$client-&gt;vendors-&gt;listVendors($request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Vendor account information


			
#### Filtering
This endpoint supports result filtering using the `$filter` query parameter. For more information on how to filter this request, [go here](https://developer.servicem8.com/docs/filtering).
			
			
#### OAuth Scope
This endpoint requires the following OAuth scope **vendor**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->vendors->listVendors(
    new ListVendorsRequest([
        'filter' => 'active eq 1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filter:** `?string` — Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;vendors-&gt;getVendors($uuid) -> ?Vendor</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Vendor account information


			
#### OAuth Scope
This endpoint requires the following OAuth scope **vendor**.

			
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->vendors->getVendors(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the Vendor
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

