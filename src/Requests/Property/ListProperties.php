<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List properties
 *
 * Lists properties. Filters can be specified . Sort by argument can be specified. Sort order can be
 * specified.
 */
class ListProperties extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/properties";
	}


	public function __construct()
	{
	}
}
