<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List property amazons
 *
 * Lists property amazons
 */
class ListPropertyAmazons extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/amazons";
	}


	public function __construct()
	{
	}
}
