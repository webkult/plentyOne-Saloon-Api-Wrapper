<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Correct stock
 *
 * Corrects stock. The item ID and the variation ID must be specified.
 */
class CorrectStock extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/stock/correction";
	}


	/**
	 * @param int $variationId The ID of the variation
	 * @param int $id
	 * @param int $itemId The ID of the item
	 */
	public function __construct(
		protected int $variationId,
		protected int $id,
		protected int $itemId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['itemId' => $this->itemId]);
	}
}
