<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List contact option sub-types
 *
 * Lists all contact option sub-types.
 */
class ListContactOptionSubTypes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/option_sub_types";
	}


	public function __construct()
	{
	}
}
