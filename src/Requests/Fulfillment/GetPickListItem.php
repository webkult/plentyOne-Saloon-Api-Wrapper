<?php

namespace PlentyOne\Api\Requests\Fulfillment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get pick list item
 *
 * Gets a pick list item specified by its pickingOrderItemId.
 */
class GetPickListItem extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/fulfillment/picklist/picking_order_item/{$this->pickingOrderItemId}";
	}


	/**
	 * @param int $pickingOrderItemId The PickingOrderItemId
	 */
	public function __construct(
		protected int $pickingOrderItemId,
	) {
	}
}
