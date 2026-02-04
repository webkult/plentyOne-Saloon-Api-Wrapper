<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Disable or enable coupon
 *
 * Sets the coupon disable field.
 */
class DisableOrEnableCoupon extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/coupons/campaigns/codes/{$this->code}/disabled/{$this->isDisabled}";
	}


	/**
	 * @param int $code
	 * @param int $isDisabled
	 */
	public function __construct(
		protected int $code,
		protected int $isDisabled,
	) {
	}
}
