<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List shipping profiles of an item
 *
 * Lists the shipping profiles linked to an item. The ID of the item must be specified.
 */
class ListShippingProfilesOfItem extends Request
{
	protected Method $method = Method::GET;


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
