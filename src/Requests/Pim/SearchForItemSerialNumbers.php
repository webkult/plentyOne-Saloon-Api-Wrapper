<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search for item serial numbers
 *
 * Search for item serial numbers. Gets a paginated list.
 */
class SearchForItemSerialNumbers extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/item-serial-numbers";
	}


	public function __construct()
	{
	}
}
