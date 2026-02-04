<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Lists all attribute value maps.
 *
 * Lists all attribute value maps.
 */
class ListsAllAttributeValueMaps extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/attributes/values/maps";
	}


	public function __construct()
	{
	}
}
