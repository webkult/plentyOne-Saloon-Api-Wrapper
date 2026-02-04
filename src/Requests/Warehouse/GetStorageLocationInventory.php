<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a storage location inventory
 *
 * Gets a storage location inventory by ID. The storage location inventory ID is required.
 */
class GetStorageLocationInventory extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/locations/inventory/{$this->warehouseLocationInventoryId}";
	}


	/**
	 * @param int $warehouseLocationInventoryId
	 * @param int $warehouseLocationId The ID of the storage location
	 */
	public function __construct(
		protected int $warehouseLocationInventoryId,
		protected int $warehouseLocationId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['warehouseLocationId' => $this->warehouseLocationId]);
	}
}
