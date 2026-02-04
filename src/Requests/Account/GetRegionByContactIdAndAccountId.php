<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get region by contactId and accountId
 *
 * Gets a region. The ID of the contact and the ID of the account must be specified.
 */
class GetRegionByContactIdAndAccountId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/{$this->accountId}/contacts/{$this->contactId}/sales_representative_regions";
	}


	/**
	 * @param int $accountId The ID of the account
	 * @param int $contactId The ID of the contact
	 */
	public function __construct(
		protected int $accountId,
		protected int $contactId,
	) {
	}
}
