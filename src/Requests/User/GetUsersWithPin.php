<?php

namespace PlentyOne\Api\Requests\User;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get users with pin
 *
 * Get all users with a secret value/pin.
 */
class GetUsersWithPin extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/user/pin_users";
	}


	public function __construct()
	{
	}
}
