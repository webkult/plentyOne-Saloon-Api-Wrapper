<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a cross-selling link
 *
 * Updates a cross-selling link. The ID of the item and the ID of the cross-selling item must be
 * specified.
 */
class UpdateCrossSellingLink extends Request
{
	protected Method $method = Method::PUT;


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
