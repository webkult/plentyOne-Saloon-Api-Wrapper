<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Deactivate a referrer account
 *
 * Deactivates a referrer account for a sales price.
 */
class DeactivateReferrerAccount extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/sales_prices/{$this->id}/accounts/{$this->accountType}/{$this->accountId}";
	}


	/**
	 * @param int $id
	 * @param int $accountType
	 * @param int $accountId
	 */
	public function __construct(
		protected int $id,
		protected int $accountType,
		protected int $accountId,
	) {
	}
}
