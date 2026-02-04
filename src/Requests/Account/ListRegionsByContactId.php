<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List regions by contactId
 *
 * Lists the regions. The ID of the contact must be specified.
 */
class ListRegionsByContactId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/{$this->contactId}/sales_representative_regions";
	}


	/**
	 * @param int $contactId The ID of the contact
	 */
	public function __construct(
		protected int $contactId,
	) {
	}
}
