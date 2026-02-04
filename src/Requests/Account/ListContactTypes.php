<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List contact types
 *
 * Lists all contact types.
 */
class ListContactTypes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/types";
	}


	public function __construct()
	{
	}
}
