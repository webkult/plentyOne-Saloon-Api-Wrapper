<?php

namespace PlentyOne\Api\Requests\Basket;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List basket items
 *
 * Lists all items in the shopping cart for the current customer session.
 */
class ListBasketItems extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/basket/items";
	}


	public function __construct()
	{
	}
}
