<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the login URL.
 *
 * Generates the eBay login URL.
 */
class GetTheLoginUrl extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/ebay/auth/login";
	}


	public function __construct()
	{
	}
}
