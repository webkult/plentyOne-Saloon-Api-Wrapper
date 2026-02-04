<?php

namespace PlentyOne\Api\Requests\Authentication;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Quick login user
 *
 * Quick login user by client name and client secret
 */
class QuickLoginUser extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/quick_login";
	}


	public function __construct()
	{
	}
}
