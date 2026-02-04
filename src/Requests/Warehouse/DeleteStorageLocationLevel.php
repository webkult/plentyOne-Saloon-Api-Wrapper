<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a storage location level
 *
 * Deletes a storage location level
 */
class DeleteStorageLocationLevel extends Request
{
	protected Method $method = Method::DELETE;


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
