<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Create and update a list of variation sales prices
 *
 * Creates and updates a list of variation sales prices.
 */
class CreateAndUpdateListOfVariationSalesPrices extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/sales_prices";
	}


	public function __construct()
	{
	}
}
