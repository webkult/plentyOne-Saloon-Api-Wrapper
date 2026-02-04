<?php

namespace PlentyOne\Api\Requests\Authorization;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get authorized user
 *
 * Gets an authorized user. This call returns a JSON object with information about the user after
 * login.
 * This information is used for correctly displaying the plentymarkets back end.
 */
class GetAuthorizedUser extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/users/me";
	}


	public function __construct()
	{
	}
}
