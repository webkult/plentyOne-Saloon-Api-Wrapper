<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Refresh access token
 *
 * Refreshes the access token using the refresh token. The refresh token is part of the login call
 * response.
 */
class RefreshAccessToken extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/account/login/refresh";
	}


	public function __construct()
	{
	}
}
