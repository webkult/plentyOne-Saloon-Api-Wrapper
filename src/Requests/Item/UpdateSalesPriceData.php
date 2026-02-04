<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update sales price data
 *
 * Updates sales price data linked to a variation. The ID of the sales price and the ID of the
 * variation must be specified.
 */
class UpdateSalesPriceData extends Request
{
	protected Method $method = Method::PUT;


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
