<?php

namespace PlentyOne\Api\Requests\StockManagement;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Book incoming stock
 *
 * Books incoming stock for multiple variations. The incoming stock will be added to the existing
 * stock. The ID of the warehouse must be specified.
 */
class BookIncomingStock extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/stockmanagement/warehouses/{$this->warehouseId}/stock/bookIncomingItems";
	}


	/**
	 * @param int $warehouseId The ID of the warehouse.
	 */
	public function __construct(
		protected int $warehouseId,
	) {
	}
}
