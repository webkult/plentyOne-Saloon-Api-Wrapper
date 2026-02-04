<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Returns the total number of unread conversations for current user
 *
 * Returns the total number of unread conversations for current user
 */
class ReturnsTheTotalNumberOfUnreadConversationsForCurrentUser extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/totals";
	}


	public function __construct()
	{
	}
}
