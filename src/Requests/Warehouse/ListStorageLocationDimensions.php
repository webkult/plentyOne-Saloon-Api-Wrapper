<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List storage location dimensions
 *
 * Lists all storage location dimensions.
 */
class ListStorageLocationDimensions extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/{$this->warehouseId}/locations/dimensions";
	}


	/**
	 * @param int $warehouseId The ID of the warehouse
	 */
	public function __construct(
		protected int $warehouseId,
	) {
	}
}
