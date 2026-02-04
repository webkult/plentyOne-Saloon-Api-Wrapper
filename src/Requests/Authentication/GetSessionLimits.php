<?php

namespace PlentyOne\Api\Requests\Authentication;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get session limits
 *
 * Get the limit of of concurrent sessions.
 */
class GetSessionLimits extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/session_limits";
	}


	public function __construct()
	{
	}
}
