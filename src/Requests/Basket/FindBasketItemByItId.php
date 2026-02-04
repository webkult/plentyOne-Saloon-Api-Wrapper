<?php

namespace PlentyOne\Api\Requests\Basket;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Find a basket item by it's ID
 *
 * Retrieve an item that is currently in the basket by it's ID
 */
class FindBasketItemByItId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/basket/items/{$this->id}";
	}


	/**
	 * @param int $id
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
