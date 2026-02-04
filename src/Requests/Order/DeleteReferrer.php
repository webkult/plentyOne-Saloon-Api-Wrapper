<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete referrer
 *
 * Delete a referrer. The ID of the referrer must be specified.
 */
class DeleteReferrer extends Request
{
	protected Method $method = Method::DELETE;


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
