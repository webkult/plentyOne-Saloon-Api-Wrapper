<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List storage locations
 *
 * Lists all storage locations for the specified warehouse.
 */
class ListStorageLocations extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/{$this->warehouseId}/locations";
	}


	/**
	 * @param int $warehouseId The ID of the warehouse
	 */
	public function __construct(
		protected int $warehouseId,
	) {
	}
}
