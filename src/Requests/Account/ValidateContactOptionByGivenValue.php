<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Validate contact option by given value
 *
 * Validates a contact option by a given value. The ID of the contact must be specified.
 */
class ValidateContactOptionByGivenValue extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/{$this->contactId}/options/validate";
	}


	/**
	 * @param int $contactId The ID of the contact
	 */
	public function __construct(
		protected int $contactId,
	) {
	}
}
