<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Calculate and save the delivery dates
 *
 * Calculates and saves the delivery dates for the reorder and the reorder items. The order ID must be
 * specified.
 */
class CalculateAndSaveTheDeliveryDates extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/reorders/{$this->orderId}/delivery_dates";
	}


	/**
	 * @param int $orderId The ID of the order.
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
