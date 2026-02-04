<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create contact type
 *
 * Creates a contact type.
 */
class CreateContactType extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/types";
	}


	public function __construct()
	{
	}
}
