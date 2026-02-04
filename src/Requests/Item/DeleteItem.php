<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete an item
 *
 * Deletes an item. The ID of the item must be specified.
 */
class DeleteItem extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->itemId}";
	}


	/**
	 * @param int $itemId
	 */
	public function __construct(
		protected int $itemId,
	) {
	}
}
