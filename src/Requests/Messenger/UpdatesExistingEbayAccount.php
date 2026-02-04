<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Updates an existing Ebay account
 *
 * Update an existing array of Ebay account settings
 */
class UpdatesExistingEbayAccount extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/messenger/marketplaces/ebay";
	}


	public function __construct()
	{
	}
}
