<?php

namespace PlentyOne\Api\Requests\StockManagement;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a storage location
 *
 * Gets a storage location. The id of the storage location and the id of the warehouse must be
 * specified.
 */
class GetStorageLocation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/stockmanagement/warehouses/{$this->warehouseId}/management/storageLocations/{$this->storageLocationId}";
	}


	/**
	 * @param int $warehouseId The id of the warehouse.
	 * @param int $storageLocationId The id of the storage location.
	 * @param null|array $columns The attributes to be loaded.
	 * @param null|array $with The relations to be loaded. Possible values are 'warehouse', 'rack' and 'shelf'.
	 */
	public function __construct(
		protected int $warehouseId,
		protected int $storageLocationId,
		protected ?array $columns = null,
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['columns' => $this->columns, 'with' => $this->with]);
	}
}
