<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Create a list of variation markets
 *
 * Creates a list of variation markets.
 */
class CreateListOfVariationMarkets extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/markets";
	}


	public function __construct()
	{
	}
}
