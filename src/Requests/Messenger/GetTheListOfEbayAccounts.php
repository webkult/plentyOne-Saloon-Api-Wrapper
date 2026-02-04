<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the list of ebay accounts
 *
 * Get the list of ebay accounts
 */
class GetTheListOfEbayAccounts extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/messenger/marketplaces/ebay/all";
	}


	public function __construct()
	{
	}
}
