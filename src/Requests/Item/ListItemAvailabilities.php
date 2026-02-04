<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List item availabilities
 *
 * Lists all item availabilities.
 */
class ListItemAvailabilities extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/availabilities";
	}


	public function __construct()
	{
	}
}
