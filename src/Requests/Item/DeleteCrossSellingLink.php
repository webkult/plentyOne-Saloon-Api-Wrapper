<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a cross-selling link
 *
 * Deletes a cross-selling link. The ID of the item and the ID of the cross-selling item must be
 * specified.
 */
class DeleteCrossSellingLink extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/item_cross_selling/{$this->crossItemId}";
	}


	/**
	 * @param int $id
	 * @param int $crossItemId
	 */
	public function __construct(
		protected int $id,
		protected int $crossItemId,
	) {
	}
}
