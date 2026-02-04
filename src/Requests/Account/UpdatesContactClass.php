<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Updates a contact class
 *
 * Updates a contact class
 */
class UpdatesContactClass extends Request
{
	protected Method $method = Method::PUT;


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
