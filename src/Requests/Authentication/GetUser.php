<?php

namespace PlentyOne\Api\Requests\Authentication;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get user
 *
 * The user call returns a JSON object that contains information about the currently logged in
 * API-User.
 */
class GetUser extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/user";
	}


	public function __construct()
	{
	}
}
