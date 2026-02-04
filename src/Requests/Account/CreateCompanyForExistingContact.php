<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create company for existing contact
 *
 * Creates a company for an existing contact. The ID of the company must be specified. An account is
 * equivalent to a company.
 */
class CreateCompanyForExistingContact extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/{$this->contactId}/accounts";
	}


	/**
	 * @param int $contactId The ID of the contact
	 */
	public function __construct(
		protected int $contactId,
	) {
	}
}
