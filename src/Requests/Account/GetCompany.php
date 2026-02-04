<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get company
 *
 * Gets a company. The ID of the account must be specified. An account is equivalent to a company.
 */
class GetCompany extends Request
{
	protected Method $method = Method::GET;


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
