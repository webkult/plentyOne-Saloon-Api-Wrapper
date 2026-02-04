<?php

namespace PlentyOne\Api\Requests\StockManagement;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a warehouse
 *
 * Gets a warehouse. The id of the warehouse must be specified.
 */
class GetWarehouse extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/stockmanagement/warehouses/{$this->warehouseId}";
	}


	/**
	 * @param int $warehouseId The id of the warehouse to be loaded
	 * @param null|array $with Related objects to be loaded. 'repairWarehouse' is the only relation currently available.
	 */
	public function __construct(
		protected int $warehouseId,
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with]);
	}
}
