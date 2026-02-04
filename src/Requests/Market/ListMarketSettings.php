<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List market settings
 *
 * Lists market settings. The marketplace ID and the type must be specified.
 */
class ListMarketSettings extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/settings";
	}


	public function __construct()
	{
	}
}
