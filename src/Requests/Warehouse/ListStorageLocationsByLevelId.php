<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List storage locations by levelId
 *
 * Lists all storage locations by levelId.
 */
class ListStorageLocationsByLevelId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/{$this->warehouseId}/locations/level/{$this->warehouseLocationLevelId}";
	}


	/**
	 * @param int $warehouseId The ID of the warehouse
	 * @param int $warehouseLocationLevelId
	 * @param int $levelId The ID of the storage location level
	 */
	public function __construct(
		protected int $warehouseId,
		protected int $warehouseLocationLevelId,
		protected int $levelId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['levelId' => $this->levelId]);
	}
}
