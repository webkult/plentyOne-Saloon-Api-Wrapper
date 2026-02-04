<?php

namespace PlentyOne\Api\Requests\StockManagement;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List archive years of stock movements
 *
 * Retrieves a list of years of archives for the stock movements.
 */
class ListArchiveYearsOfStockMovements extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/stockmanagement/stock/archives";
	}


	public function __construct()
	{
	}
}
