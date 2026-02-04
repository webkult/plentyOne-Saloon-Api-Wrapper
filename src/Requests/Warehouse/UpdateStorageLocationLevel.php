<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a storage location level
 *
 * Updates a storage location level
 */
class UpdateStorageLocationLevel extends Request
{
	protected Method $method = Method::PUT;


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
