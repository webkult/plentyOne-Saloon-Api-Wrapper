<?php

namespace PlentyOne\Api\Requests\Fulfillment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all pick lists
 *
 * Get all pick lists for the given filters.
 */
class GetAllPickLists extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/fulfillment/picklist";
	}


	public function __construct()
	{
	}
}
