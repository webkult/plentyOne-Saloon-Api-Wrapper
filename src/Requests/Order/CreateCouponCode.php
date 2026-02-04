<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a coupon code
 *
 * Creates a coupon code. The ID of the campaign must be specified.
 * A code can optionally be specified.
 * A random code will be generated if the code is not specified.
 * A coupon value can also be optionally
 * specified.
 * The value of the campaign will be used if no individual value is specified.
 */
class CreateCouponCode extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/coupons/campaigns/{$this->campaignId}/codes";
	}


	/**
	 * @param int $campaignId
	 */
	public function __construct(
		protected int $campaignId,
	) {
	}
}
