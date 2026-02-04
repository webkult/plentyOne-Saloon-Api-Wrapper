<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete an item set component
 *
 * Deletes an item set component. The item set component ID of the item set component must be
 * specified.
 */
class DeleteItemSetComponent extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/item_sets/{$this->setId}/components/{$this->id}";
	}


	/**
	 * @param int $setId
	 * @param int $id
	 */
	public function __construct(
		protected int $setId,
		protected int $id,
	) {
	}
}
