<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete company of the contact
 *
 * Deletes a company of the contact. The ID of the contact and the ID of the company must be specified.
 * An account is equivalent to a company.
 */
class DeleteCompanyOfTheContact extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/{$this->contactId}/accounts/{$this->accountId}";
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param int $accountId The ID of the company
	 */
	public function __construct(
		protected int $contactId,
		protected int $accountId,
	) {
	}
}
