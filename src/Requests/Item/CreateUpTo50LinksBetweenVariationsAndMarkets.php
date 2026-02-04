<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create up to 50 links between variations and markets
 *
 * Creates up to 50 links between variations and markets. The ID of the variation and the ID of the
 * market must be specified.
 */
class CreateUpTo50LinksBetweenVariationsAndMarkets extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/items/variations/variation_markets";
	}


	public function __construct()
	{
	}
}
