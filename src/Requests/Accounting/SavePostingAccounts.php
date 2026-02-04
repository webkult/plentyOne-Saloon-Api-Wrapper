<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Save posting accounts
 *
 * Save all posting accounts.
 */
class SavePostingAccounts extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/accounting/locations/posting_accounts";
	}


	public function __construct()
	{
	}
}
