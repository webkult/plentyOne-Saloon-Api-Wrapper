<?php

namespace PlentyOne\Api\Requests\User;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all users
 *
 * Get all users in an array.
 */
class GetAllUsers extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/backend/users";
	}


	public function __construct()
	{
	}
}
