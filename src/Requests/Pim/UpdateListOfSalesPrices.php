<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a list of sales prices
 *
 * Updates a list of sales prices.
 */
class UpdateListOfSalesPrices extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/sales_prices";
	}


	public function __construct()
	{
	}
}
