<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List countries by sales price
 *
 * Lists active countries for a sales price. The ID of the sales price must be specified.
 */
class ListCountriesBySalesPrice extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/sales_prices/{$this->id}/countries";
	}


	/**
	 * @param int $id
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
