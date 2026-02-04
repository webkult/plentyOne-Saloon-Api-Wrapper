<?php

namespace PlentyOne\Api\Requests\Ticket;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List type names
 *
 * Lists all type names.
 */
class ListTypeNames extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/tickets/types/names";
	}


	public function __construct()
	{
	}
}
