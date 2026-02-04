<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Revert outgoing stock
 *
 * Cancellation the booking of an order. The ID of the order must be specified. With the array
 * 'quantities' the items to cancel can be defined. If 'quantities' is not given, the whole order will
 * be cancelled and the booking date will be deleted. If 'quantities' is defined, the booking date
 * won't be reset.
 */
class RevertOutgoingStock extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/warranties/{$this->orderId}/cancel_booking";
	}


	/**
	 * @param int $orderId
	 */
	public function __construct(
		protected int $orderId,
	) {
	}
}
