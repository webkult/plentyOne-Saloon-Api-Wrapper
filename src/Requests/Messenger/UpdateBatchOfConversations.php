<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update batch of conversations
 *
 * Update batch of conversations
 */
class UpdateBatchOfConversations extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/batch_update_conversations";
	}


	public function __construct()
	{
	}
}
