<?php

namespace PlentyOne\Api\Requests\Fulfillment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete trolley tag
 *
 * Delete a trolley tag by picking order id.
 */
class DeleteTrolleyTag extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/fulfillment/picklist/{$this->pickingOrderId}/trolley_tags";
	}


	/**
	 * @param int $pickingOrderId
	 */
	public function __construct(
		protected int $pickingOrderId,
	) {
	}
}
