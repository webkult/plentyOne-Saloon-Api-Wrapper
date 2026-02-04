<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Redeem a coupon code
 *
 * Redeems a coupon code and applies it to an order. The ID of the order must be specified. If the
 * coupon was successfully redeemed, the coupon data will be returned. If the coupon can not be
 * redeemed, a validation exception will be thrown.
 */
class RedeemCouponCode extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/coupons/{$this->coupon}";
	}


	/**
	 * @param int $orderId The ID of the order to redeem the coupon
	 * @param string $coupon The coupon code to be redeemed
	 */
	public function __construct(
		protected int $orderId,
		protected string $coupon,
	) {
	}
}
