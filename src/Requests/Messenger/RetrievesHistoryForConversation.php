<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Retrieves history for a conversation
 *
 * Retrieves history for a conversation
 */
class RetrievesHistoryForConversation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/history/{$this->uuid5}";
	}


	/**
	 * @param int $uuid5
	 */
	public function __construct(
		protected int $uuid5,
	) {
	}
}
