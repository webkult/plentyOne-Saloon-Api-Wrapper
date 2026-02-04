<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Create and update a list of variation market ident numbers
 *
 * Creates and updates a list of variation market ident numbers.
 */
class CreateAndUpdateListOfVariationMarketIdentNumbers extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/market_ident_numbers";
	}


	public function __construct()
	{
	}
}
