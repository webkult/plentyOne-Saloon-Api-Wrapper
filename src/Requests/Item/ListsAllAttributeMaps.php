<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Lists all attribute maps.
 *
 * Lists all attribute maps.
 */
class ListsAllAttributeMaps extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/attributes/maps";
	}


	public function __construct()
	{
	}
}
