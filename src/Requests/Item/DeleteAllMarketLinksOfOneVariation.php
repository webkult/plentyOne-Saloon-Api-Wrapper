<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete all market links of one variation
 *
 * Deletes all links of one variation. The ID of the variation must be specified.
 */
class DeleteAllMarketLinksOfOneVariation extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/variation_markets";
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
