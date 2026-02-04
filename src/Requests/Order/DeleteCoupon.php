<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a coupon
 *
 * Deletes a coupon by the coupon code.
 */
class DeleteCoupon extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/coupons/campaigns/codes/{$this->code}";
	}


	/**
	 * @param int $code
	 * @param null|int $withoutUsed Do not delete used coupons
	 */
	public function __construct(
		protected int $code,
		protected ?int $withoutUsed = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['withoutUsed' => $this->withoutUsed]);
	}
}
