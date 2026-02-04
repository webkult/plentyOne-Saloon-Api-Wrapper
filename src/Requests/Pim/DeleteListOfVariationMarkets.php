<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a list of variation markets
 *
 * Deletes a list of variation markets.
 */
class DeleteListOfVariationMarkets extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/markets";
	}


	public function __construct()
	{
	}
}
