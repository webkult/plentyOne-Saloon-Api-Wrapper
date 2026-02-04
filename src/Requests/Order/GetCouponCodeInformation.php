<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get coupon code information
 *
 * Gets coupon code information. The code must be specified.
 */
class GetCouponCodeInformation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/coupons/campaigns/codes/{$this->code}";
	}


	/**
	 * @param string $code The coupon code
	 * @param null|string $with Load additional relations for a coupon code.
	 *      *     Currently possible are:
	 *      * <ul>
	 *      *   <li>'campaign' = The coupon campaign to which this code belongs to.</li>
	 *      * </ul>
	 *      * Example: <code>?with=campaign</code>
	 */
	public function __construct(
		protected string $code,
		protected ?string $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with]);
	}
}
