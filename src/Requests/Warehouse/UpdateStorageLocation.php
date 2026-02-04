<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a storage location
 *
 * Updates a storage location
 */
class UpdateStorageLocation extends Request
{
	protected Method $method = Method::PUT;


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
