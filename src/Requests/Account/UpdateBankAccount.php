<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update bank account
 *
 * Updates a bank account. The ID of the bank account must be specified.
 */
class UpdateBankAccount extends Request
{
	protected Method $method = Method::PUT;


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
