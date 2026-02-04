<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a storage location
 *
 * Deletes a storage location
 */
class DeleteStorageLocation extends Request
{
	protected Method $method = Method::DELETE;


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
