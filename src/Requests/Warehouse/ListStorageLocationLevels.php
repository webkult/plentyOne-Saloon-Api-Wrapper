<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List storage location levels
 *
 * Lists all storage location levels.
 */
class ListStorageLocationLevels extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/{$this->warehouseId}/locations/levels";
	}


	/**
	 * @param int $warehouseId The ID of the warehouse
	 */
	public function __construct(
		protected int $warehouseId,
	) {
	}
}
