<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List storage locations stock
 *
 * Lists all storage locations stock.
 */
class ListStorageLocationsStock extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/locations/stock/{$this->warehouseLocationId}";
	}


	/**
	 * @param int $warehouseLocationId
	 * @param int $warehouseLocationId The ID of the warehouse
	 */
	public function __construct(
		protected int $warehouseLocationId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['$warehouseLocationId' => $this->warehouseLocationId]);
	}
}
