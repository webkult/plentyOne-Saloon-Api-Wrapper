<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a list of sales prices
 *
 * Deletes a list of sales prices.
 */
class DeleteListOfSalesPrices extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/sales_prices";
	}


	public function __construct()
	{
	}
}
