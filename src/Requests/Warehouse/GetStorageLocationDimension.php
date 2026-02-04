<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a storage location dimension
 *
 * Gets a storage location dimension by ID. The storage location ID is required.
 */
class GetStorageLocationDimension extends Request
{
	protected Method $method = Method::GET;


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
