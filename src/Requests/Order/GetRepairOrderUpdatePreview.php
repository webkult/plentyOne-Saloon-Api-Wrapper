<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a repair order update preview
 *
 * Returns a repair order preview for the given order data without updating a repair order. The order
 * ID must be specified.
 */
class GetRepairOrderUpdatePreview extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/repairs/{$this->orderId}/preview";
	}


	/**
	 * @param int $orderId
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
