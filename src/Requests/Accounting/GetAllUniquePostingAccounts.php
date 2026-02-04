<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all unique posting accounts
 *
 * Get all unique posting accounts from the PostingAccountRepositoryContract.
 */
class GetAllUniquePostingAccounts extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounting/locations/existing_accounts";
	}


	public function __construct()
	{
	}
}
