<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Subscribes a user to a conversation
 *
 * Subscribes a user to a conversation
 */
class SubscribesUserToConversation extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/{$this->uuid5}/subscribe";
	}


	/**
	 * @param int $uuid5
	 * @param int $userId The ID of the user to be subscribed. Expected format: 1
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
