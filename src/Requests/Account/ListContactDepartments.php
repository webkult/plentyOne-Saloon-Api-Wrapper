<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List contact departments
 *
 * Lists all contact departments.
 */
class ListContactDepartments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/departments";
	}


	public function __construct()
	{
	}
}
