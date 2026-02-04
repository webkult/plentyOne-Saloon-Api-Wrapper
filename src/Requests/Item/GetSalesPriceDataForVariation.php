<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get sales price data for a variation
 *
 * Gets sales price data linked to a variation. The ID of the sales price and the ID of the variation
 * must be specified.
 */
class GetSalesPriceDataForVariation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/variation_sales_prices/{$this->priceId}";
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $priceId
	 */
	public function __construct(
		protected int $id,
		protected int $variationId,
		protected int $priceId,
	) {
	}
}
