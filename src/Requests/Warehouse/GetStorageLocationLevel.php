<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a storage location level
 *
 * Gets a storage location level by ID. The storage location ID is required.
 */
class GetStorageLocationLevel extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/locations/levels/{$this->warehouseLocationLevelId}";
	}


	/**
	 * @param int $warehouseLocationLevelId The ID of the storage location level
	 */
	public function __construct(
		protected int $warehouseLocationLevelId,
	) {
	}
}
