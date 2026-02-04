<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Book outgoing stock
 *
 * Books outgoing stock for a variation. The ID of the item and the ID of the variation must be
 * specified.
 */
class BookOutgoingStock extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/stock/bookOutgoingItems";
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
