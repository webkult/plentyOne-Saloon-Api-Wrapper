<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create company
 *
 * Creates a company. An account is equivalent to a company.
 */
class CreateCompany extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts";
	}


	public function __construct()
	{
	}
}
