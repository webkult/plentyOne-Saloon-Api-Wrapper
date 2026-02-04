<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete contact event
 *
 * Deletes a contact event. The ID of the contact event must be specified.
 */
class DeleteContactEvent extends Request
{
	protected Method $method = Method::DELETE;


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
