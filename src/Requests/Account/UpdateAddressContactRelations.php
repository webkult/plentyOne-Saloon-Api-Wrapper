<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update address contact relations
 *
 * Updates an address contact relation.
 */
class UpdateAddressContactRelations extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/addresses/contact_relations";
	}


	public function __construct()
	{
	}
}
