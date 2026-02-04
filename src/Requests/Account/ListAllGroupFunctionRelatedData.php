<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all group function related data
 *
 * Lists all data that is related to the contact group function contents.
 */
class ListAllGroupFunctionRelatedData extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/group_functions";
	}


	public function __construct()
	{
	}
}
