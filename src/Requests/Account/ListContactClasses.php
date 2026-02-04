<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List contact classes
 *
 * Lists the contact classes.
 */
class ListContactClasses extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/classesWithData";
	}


	public function __construct()
	{
	}
}
