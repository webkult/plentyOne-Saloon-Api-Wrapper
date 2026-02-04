<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a variation
 *
 * Delete a variation. The ID of the item and the ID of the variation must be specified.
 */
class DeleteVariation extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->itemId}/variations/{$this->variationId}";
	}


	/**
	 * @param int $itemId
	 * @param int $variationId
	 */
	public function __construct(
		protected int $itemId,
		protected int $variationId,
	) {
	}
}
