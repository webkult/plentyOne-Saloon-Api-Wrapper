<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Deletes a contact class
 *
 * Deletes a contact class
 */
class DeletesContactClass extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/classes/{$this->contactClassId}";
	}


	/**
	 * @param int $contactClassId
	 */
	public function __construct(
		protected int $contactClassId,
	) {
	}
}
