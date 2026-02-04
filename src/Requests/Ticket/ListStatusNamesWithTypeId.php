<?php

namespace PlentyOne\Api\Requests\Ticket;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List status names with typeId
 *
 * Lists status names with typeId.
 */
class ListStatusNamesWithTypeId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/tickets/status/type/names";
	}


	public function __construct()
	{
	}
}
