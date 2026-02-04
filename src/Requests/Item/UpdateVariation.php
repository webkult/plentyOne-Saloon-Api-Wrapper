<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a variation
 *
 * Updates a variation. The ID of the variation must be specified.
 */
class UpdateVariation extends Request
{
	protected Method $method = Method::PUT;


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
