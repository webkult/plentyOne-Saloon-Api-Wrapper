<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update contact option
 *
 * Updates a contact option for an existing contact. The ID of the contact option must be specified.
 */
class UpdateContactOption extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/{$this->contactId}/options";
	}


	/**
	 * @param int $contactId The ID of the contact
	 */
	public function __construct(
		protected int $contactId,
	) {
	}
}
