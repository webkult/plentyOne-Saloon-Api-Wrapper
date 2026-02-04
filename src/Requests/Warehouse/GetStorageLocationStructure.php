<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a storage location structure
 *
 * Gets a storage location structure by warehouse ID. The warehouse ID is required.
 */
class GetStorageLocationStructure extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/structure/{$this->warehouseId}";
	}


	/**
	 * @param int $warehouseId The actual warehouse ID
	 */
	public function __construct(
		protected int $warehouseId,
	) {
	}
}
