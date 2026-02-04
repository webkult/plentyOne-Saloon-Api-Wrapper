<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete contact type
 *
 * Deletes a contact type. The ID of the contact type must be specified.
 */
class DeleteContactType extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/types/{$this->typeId}";
	}


	/**
	 * @param int $typeId The ID of the contact type
	 */
	public function __construct(
		protected int $typeId,
	) {
	}
}
