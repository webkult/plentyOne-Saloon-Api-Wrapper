<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List property markets
 *
 * Lists property markets
 */
class ListPropertyMarkets extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/markets";
	}


	public function __construct()
	{
	}
}
