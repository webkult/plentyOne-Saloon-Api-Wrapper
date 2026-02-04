<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get availability for storage location
 *
 * Gets availability for storage location
 */
class GetAvailabilityForStorageLocation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/locations/availability/{$this->warehouseLocationId}";
	}


	/**
	 * @param int $warehouseLocationId The ID of the storage location
	 */
	public function __construct(
		protected int $warehouseLocationId,
	) {
	}
}
