<?php

namespace PlentyOne\Api\Requests\StockManagement;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Correct stock
 *
 * Corrects stock. The ID of the warehouse must be specified.
 */
class CorrectStock extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/stockmanagement/warehouses/{$this->warehouseId}/stock/correction";
	}


	/**
	 * @param int $warehouseId The ID of the warehouse.
	 */
	public function __construct(
		protected int $warehouseId,
	) {
	}
}
