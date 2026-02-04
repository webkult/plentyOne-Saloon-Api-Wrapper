<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all credentials
 *
 * Lists all credentials - no pagination - usual filters: market and data['authType']
 */
class ListAllCredentials extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/credentials/all";
	}


	public function __construct()
	{
	}
}
