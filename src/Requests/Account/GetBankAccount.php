<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get bank account
 *
 * Gets a bank account of the contact. The ID of the bank account must be specified.
 */
class GetBankAccount extends Request
{
	protected Method $method = Method::GET;


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
