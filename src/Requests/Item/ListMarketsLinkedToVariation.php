<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List markets linked to a variation
 *
 * Lists all markets linked to a variation. The ID of the item and the ID of the variation must be
 * specified.
 */
class ListMarketsLinkedToVariation extends Request
{
	protected Method $method = Method::GET;


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
