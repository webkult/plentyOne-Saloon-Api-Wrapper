<?php

namespace PlentyOne\Api\Requests\Authentication;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Check given pin
 *
 * Checks the credentials.
 */
class CheckGivenPin extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/check_pin";
	}


	public function __construct()
	{
	}
}
