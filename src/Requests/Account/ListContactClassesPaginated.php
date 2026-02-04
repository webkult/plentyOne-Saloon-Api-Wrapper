<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List contact classes paginated
 *
 * Lists the contact classes paginated
 */
class ListContactClassesPaginated extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/classes/paginated";
	}


	public function __construct()
	{
	}
}
