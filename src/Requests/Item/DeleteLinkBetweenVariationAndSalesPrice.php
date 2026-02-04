<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete link between variation and sales price
 *
 * Deletes a link between a variation and a sales price and deletes the sales price data. The ID of the
 * sales price and the ID of the variation must be specified.
 */
class DeleteLinkBetweenVariationAndSalesPrice extends Request
{
	protected Method $method = Method::DELETE;


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
