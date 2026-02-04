<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get contact event types as a key/value array
 *
 * Get the contact event types as a key/value array.
 */
class GetContactEventTypesAsKeyValueArray extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/contact_events/types/preview";
	}


	public function __construct()
	{
	}
}
