<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Deactivates a referrer
 *
 * Deactivates a referrer for a sales price. The ID of the sales price and the ID of the referrer must
 * be specified.
 */
class DeactivatesReferrer extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/sales_prices/{$this->id}/referrers/{$this->referrerId}";
	}


	/**
	 * @param int $id
	 * @param int $referrerId
	 */
	public function __construct(
		protected int $id,
		protected int $referrerId,
	) {
	}
}
