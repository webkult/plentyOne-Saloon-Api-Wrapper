<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete all links between a variation and its sales prices
 *
 * Deletes all links between a variation and its sales prices and deletes the sales price data. The ID
 * of the variation must be specified.
 */
class DeleteAllLinksBetweenVariationAndItsSalesPrices extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/variation_sales_prices";
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function __construct(
		protected int $id,
		protected int $variationId,
	) {
	}
}
