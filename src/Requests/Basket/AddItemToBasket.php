<?php

namespace PlentyOne\Api\Requests\Basket;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Add item to basket
 *
 * Adds a new item to the shopping cart using the request parameters.
 */
class AddItemToBasket extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/basket/items";
	}


	public function __construct()
	{
	}
}
