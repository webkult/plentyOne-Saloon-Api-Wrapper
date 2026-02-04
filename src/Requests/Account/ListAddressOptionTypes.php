<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List address option types
 *
 * Lists the address option types.
 */
class ListAddressOptionTypes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/addresses/option_types";
	}


	public function __construct()
	{
	}
}
