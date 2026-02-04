<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get posting accounts by locationId
 *
 * Get all posting accounts by locationId.
 */
class GetPostingAccountsByLocationId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounting/locations/{$this->locationId}/posting_accounts";
	}


	/**
	 * @param int $locationId The ID of the accounting location.
	 */
	public function __construct(
		protected int $locationId,
	) {
	}
}
