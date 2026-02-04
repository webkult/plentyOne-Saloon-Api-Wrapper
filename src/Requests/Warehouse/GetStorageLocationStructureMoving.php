<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a storage location structure moving
 *
 * Gets a storage location structure moving by warehouse ID. The warehouse ID is required.
 */
class GetStorageLocationStructureMoving extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/structure/{$this->warehouseId}/moving";
	}


	/**
	 * @param int $warehouseId The actual warehouse ID
	 */
	public function __construct(
		protected int $warehouseId,
	) {
	}
}
