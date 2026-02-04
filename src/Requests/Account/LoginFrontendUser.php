<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Login frontend user
 *
 * Logs in to the online store with frontend user credentials. The login call returns a JSON object
 * that contains information, such as the access token and the refresh token.
 */
class LoginFrontendUser extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/account/login";
	}


	public function __construct()
	{
	}
}
