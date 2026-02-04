<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Logout frontend user
 *
 * Logs out the frontend user from the online store. The access token expires.
 */
class LogoutFrontendUser extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/account/logout";
	}


	public function __construct()
	{
	}
}
