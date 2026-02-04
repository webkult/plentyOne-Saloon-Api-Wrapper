<?php

namespace PlentyOne\Api\Requests\StockManagement;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List warehouses
 *
 * Lists warehouses without applying any filters.
 */
class ListWarehouses extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/stockmanagement/warehouses";
	}


	/**
	 * @param null|array $with Related objects to be loaded. repairWarehouse is the only relation currently available.
	 */
	public function __construct(
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with]);
	}
}
