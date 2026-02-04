<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Deactivate shipping profiles of an item
 *
 * Deactivates all shipping profiles of an item. The ID of the item must be specified.
 */
class DeactivateShippingProfilesOfItem extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->itemId}/item_shipping_profiles";
	}


	/**
	 * @param int $itemId
	 */
	public function __construct(
		protected int $itemId,
	) {
	}
}
