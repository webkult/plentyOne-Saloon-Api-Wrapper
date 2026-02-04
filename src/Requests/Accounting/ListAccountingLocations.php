<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List accounting locations
 *
 * List all accounting locations
 */
class ListAccountingLocations extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounting/stores/locations";
	}


	public function __construct()
	{
	}
}
