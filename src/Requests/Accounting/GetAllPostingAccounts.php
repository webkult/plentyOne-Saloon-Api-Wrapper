<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all posting accounts
 *
 * Get all posting accounts from the PostingAccountRepositoryContract.
 */
class GetAllPostingAccounts extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounting/locations/posting_accounts";
	}


	public function __construct()
	{
	}
}
