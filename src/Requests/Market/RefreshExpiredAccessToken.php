<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Refresh an expired access token.
 *
 * Refreshes the expired eBay access token.
 */
class RefreshExpiredAccessToken extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/ebay/auth/refresh-token";
	}


	public function __construct()
	{
	}
}
