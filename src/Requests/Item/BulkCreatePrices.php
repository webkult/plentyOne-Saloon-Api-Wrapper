<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Bulk create prices
 *
 * Creates up to 50 prices of variations. The ID of the variation, the ID of the sales price and a
 * price must be specified.
 */
class BulkCreatePrices extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/items/variations/variation_sales_prices";
	}


	public function __construct()
	{
	}
}
