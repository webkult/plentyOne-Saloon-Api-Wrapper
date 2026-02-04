<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Unsubscribes a user from a conversation
 *
 * Unsubscribes a user from a conversation
 */
class UnsubscribesUserFromConversation extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/{$this->uuid5}/unsubscribe";
	}


	/**
	 * @param int $uuid5
	 * @param int $userId The ID of the user to be unsubscribed. Expected format: 1
	 */
	public function __construct(
		protected int $uuid5,
		protected int $userId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['userId' => $this->userId]);
	}
}
