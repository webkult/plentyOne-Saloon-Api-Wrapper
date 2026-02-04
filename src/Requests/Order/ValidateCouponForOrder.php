<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Validate coupon for order
 *
 * Validates a coupon for an order.
 */
class ValidateCouponForOrder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/coupons/{$this->coupon}/validate";
	}


	/**
	 * @param int $orderId
	 * @param int $coupon
	 */
	public function __construct(
		protected int $orderId,
		protected int $coupon,
	) {
	}
}
