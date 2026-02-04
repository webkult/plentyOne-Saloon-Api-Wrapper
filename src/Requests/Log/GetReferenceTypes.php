<?php

namespace PlentyOne\Api\Requests\Log;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get reference types
 *
 * Get all registered reference types.
 */
class GetReferenceTypes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/logs/reference_types";
	}


	public function __construct()
	{
	}
}
