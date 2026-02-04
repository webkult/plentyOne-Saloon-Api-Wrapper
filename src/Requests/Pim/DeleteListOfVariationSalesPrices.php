<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a list of variation sales prices
 *
 * Deletes a list of variation sales prices.
 */
class DeleteListOfVariationSalesPrices extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/sales_prices";
	}


	public function __construct()
	{
	}
}
