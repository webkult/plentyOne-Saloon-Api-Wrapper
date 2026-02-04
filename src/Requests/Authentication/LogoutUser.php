<?php

namespace PlentyOne\Api\Requests\Authentication;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Logout user
 *
 * Logs out the back end user from plentymarkets. The access token expires.
 */
class LogoutUser extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/logout";
	}


	public function __construct()
	{
	}
}
