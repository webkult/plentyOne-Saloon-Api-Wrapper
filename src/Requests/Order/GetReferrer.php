<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a referrer
 *
 * Gets a referrer. The ID of the referrer must be specified.
 */
class GetReferrer extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/referrers/{$this->referrerId}";
	}


	/**
	 * @param int $referrerId The ID of the referrer.
	 */
	public function __construct(
		protected int $referrerId,
	) {
	}
}
