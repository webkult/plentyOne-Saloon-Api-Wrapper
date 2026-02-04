<?php

namespace PlentyOne\Api\Requests\Webstore;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List clients (stores)
 *
 * Lists all clients (stores)
 */
class ListClientsStores extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/webstores";
	}


	public function __construct()
	{
	}
}
