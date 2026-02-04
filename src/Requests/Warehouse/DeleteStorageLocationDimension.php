<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a storage location dimension
 *
 * Deletes a storage location dimension
 */
class DeleteStorageLocationDimension extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/locations/dimensions/{$this->warehouseLocationDimensionId}";
	}


	/**
	 * @param int $warehouseLocationDimensionId The ID of the storage location dimension
	 */
	public function __construct(
		protected int $warehouseLocationDimensionId,
	) {
	}
}
