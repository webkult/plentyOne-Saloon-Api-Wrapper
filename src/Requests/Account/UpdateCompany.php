<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update company
 *
 * Updates a company. The ID of the company must be specified. An account is equivalent to a company.
 */
class UpdateCompany extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/{$this->accountId}";
	}


	/**
	 * @param int $accountId The ID of the company
	 */
	public function __construct(
		protected int $accountId,
	) {
	}
}
