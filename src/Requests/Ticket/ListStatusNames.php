<?php

namespace PlentyOne\Api\Requests\Ticket;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List status names
 *
 * Lists all status names of the ticket types.
 */
class ListStatusNames extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/tickets/status/names";
	}


	public function __construct()
	{
	}
}
