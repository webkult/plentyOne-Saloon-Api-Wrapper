<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete bank account
 *
 * Deletes a bank account. The ID of the bank account must be specified.
 */
class DeleteBankAccount extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/banks/{$this->contactBankId}";
	}


	/**
	 * @param int $contactBankId The ID of the bank account
	 */
	public function __construct(
		protected int $contactBankId,
	) {
	}
}
