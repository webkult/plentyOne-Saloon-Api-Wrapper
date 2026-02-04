<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update owner roles for specific conversation id/ids
 *
 * Update owner roles for specific conversation id/ids
 */
class UpdateOwnerRolesForSpecificConversationIdIds extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/owner";
	}


	public function __construct()
	{
	}
}
