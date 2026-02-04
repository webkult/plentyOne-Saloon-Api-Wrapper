<?php

namespace PlentyOne\Api\Requests\Export;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Generate a token
 *
 * Creates a new token which can be used as <code>OutputParam</code> entry.
 */
class GenerateToken extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/exports/generate_token";
	}


	public function __construct()
	{
	}
}
