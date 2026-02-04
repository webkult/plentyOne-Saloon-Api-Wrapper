<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Bulk update prices
 *
 * Updates up to 50 prices of variations. The ID of the variation, the ID of the sales price and a
 * price must be specified.
 */
class BulkUpdatePrices extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/items/variations/variation_sales_prices";
	}


	public function __construct()
	{
	}
}
