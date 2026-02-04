<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete link between variation and market
 *
 * Deletes a link between a variation and a market. The ID of the item, the ID of the variation and the
 * ID of the market must be specified.
 */
class DeleteLinkBetweenVariationAndMarket extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/variation_markets/{$this->marketplaceId}";
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $marketplaceId
	 */
	public function __construct(
		protected int $id,
		protected int $variationId,
		protected int $marketplaceId,
	) {
	}
}
