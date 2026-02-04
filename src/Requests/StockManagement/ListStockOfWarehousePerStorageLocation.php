<?php

namespace PlentyOne\Api\Requests\StockManagement;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List stock of a warehouse per storage location
 *
 * Lists stock of a warehouse for each variation and storage location. The stock will only be listed if
 * the stock is positive. Negative stock will not be listed. The ID of the warehouse must be specified.
 */
class ListStockOfWarehousePerStorageLocation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/stockmanagement/warehouses/{$this->warehouseId}/stock/storageLocations";
	}


	/**
	 * @param int $warehouseId
	 * @param null|string $updatedAtFrom Filter that restricts the search result to stock that were last updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $updatedAtTo Filter that restricts the search result to stock that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|int $variationId Filter that restricts the search result to stock with a variation.
	 * @param null|int $storageLocationId Filter that restricts the search result to stock of a storage location.
	 * @param null|int $page The requested page.
	 * @param null|int $itemsPerPage The number of items per page.
	 * @param null|array $columns The properties to be loaded.
	 * @param null|array $with Load additional relations for a StockStorageLocation. Possible values:
	 *     <ul>
	 *     <li>'storageLocation' = The storageLocation this stock information belongs to.</li>
	 *     </ul>
	 *     Example: <code>?with[]=storageLocation</code>
	 */
	public function __construct(
		protected int $warehouseId,
		protected ?string $updatedAtFrom = null,
		protected ?string $updatedAtTo = null,
		protected ?int $variationId = null,
		protected ?int $storageLocationId = null,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?array $columns = null,
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'updatedAtFrom' => $this->updatedAtFrom,
			'updatedAtTo' => $this->updatedAtTo,
			'variationId' => $this->variationId,
			'storageLocationId' => $this->storageLocationId,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'columns' => $this->columns,
			'with' => $this->with,
		]);
	}
}
