<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Deactivate a shipping profile
 *
 * Unlinks a shipping profile from the item. The ID of the item must be specified.
 */
class DeactivateShippingProfile extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->itemId}/item_shipping_profiles/{$this->id}";
	}


	/**
	 * @param int $itemId The unique ID of the item
	 * @param int $id The unique ID of the link between item and shipping profile
	 */
	public function __construct(
		protected int $itemId,
		protected int $id,
	) {
	}
}
