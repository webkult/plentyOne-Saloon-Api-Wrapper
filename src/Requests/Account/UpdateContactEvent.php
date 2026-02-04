<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update contact event
 *
 * Updates a contact event. The ID of the contact event must be specified.
 */
class UpdateContactEvent extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/contact_events/{$this->contactEventId}";
	}


	/**
	 * @param int $contactEventId The ID of the contact event
	 */
	public function __construct(
		protected int $contactEventId,
	) {
	}
}
