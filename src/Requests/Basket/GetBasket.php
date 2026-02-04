<?php

namespace PlentyOne\Api\Requests\Basket;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get basket
 *
 * Gets the shopping cart for the current customer session.
 */
class GetBasket extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/basket";
	}


	public function __construct()
	{
	}
}
