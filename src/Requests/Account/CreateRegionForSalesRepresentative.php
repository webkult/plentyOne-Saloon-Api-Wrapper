<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create region for sales representative
 *
 * Creates a region for the sales representative. The ID of the company and the ID of the sales
 * representative (contactId) must be specified. An account is equivalent to a company.
 */
class CreateRegionForSalesRepresentative extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/{$this->accountId}/contacts/{$this->contactId}/sales_representative_regions";
	}


	/**
	 * @param int $accountId The ID of the company
	 * @param int $contactId The ID of the contact
	 */
	public function __construct(
		protected int $accountId,
		protected int $contactId,
	) {
	}
}
