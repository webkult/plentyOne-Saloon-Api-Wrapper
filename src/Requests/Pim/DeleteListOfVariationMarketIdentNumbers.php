<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a list of variation market ident numbers
 *
 * Deletes a list of variation market ident numbers.
 */
class DeleteListOfVariationMarketIdentNumbers extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/market_ident_numbers";
	}


	public function __construct()
	{
	}
}
