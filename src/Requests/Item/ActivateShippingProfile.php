<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Activate a shipping profile
 *
 * Links a shipping profile to the item. The ID of the item and the ID of the shipping profile must be
 * specified.
 */
class ActivateShippingProfile extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


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
