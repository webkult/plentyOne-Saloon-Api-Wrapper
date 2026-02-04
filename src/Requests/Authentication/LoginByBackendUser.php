<?php

namespace PlentyOne\Api\Requests\Authentication;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Login by backend user
 *
 * Logs in to plentymarkets with your back end user credentials. The login call returns a JSON object
 * that contains information, such as the access token and the refresh token.
 */
class LoginByBackendUser extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/login";
	}


	public function __construct()
	{
	}
}
