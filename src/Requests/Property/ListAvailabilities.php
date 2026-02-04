<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List availabilities
 *
 * Lists availabilities.
 */
class ListAvailabilities extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/availabilities";
	}


	public function __construct()
	{
	}
}
