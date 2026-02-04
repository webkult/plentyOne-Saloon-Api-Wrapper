<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a credential
 *
 * Create a new credential with the given data.
 */
class CreateCredential extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/credentials";
	}


	public function __construct()
	{
	}
}
