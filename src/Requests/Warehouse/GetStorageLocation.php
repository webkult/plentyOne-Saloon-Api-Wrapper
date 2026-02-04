<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a storage location
 *
 * Gets a storage location by ID. The storage location ID is required.
 */
class GetStorageLocation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/locations/{$this->warehouseLocationId}";
	}


	/**
	 * @param int $warehouseLocationId The ID of the storage location
	 */
	public function __construct(
		protected int $warehouseLocationId,
	) {
	}
}
