<?php

namespace PlentyOne\Api\Requests\StockManagement;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Book outgoing stock
 *
 * Books outgoing stock for multiple variations. The ID of the warehouse must be specified.
 */
class BookOutgoingStock extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/stockmanagement/warehouses/{$this->warehouseId}/stock/bookOutgoingItems";
	}


	/**
	 * @param int $warehouseId The ID of the warehouse.
	 */
	public function __construct(
		protected int $warehouseId,
	) {
	}
}
