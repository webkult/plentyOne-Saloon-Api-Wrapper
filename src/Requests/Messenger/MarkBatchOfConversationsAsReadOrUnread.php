<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Mark a batch of conversations as read or unread
 *
 * Mark a batch of conversations as read or unread
 */
class MarkBatchOfConversationsAsReadOrUnread extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/read";
	}


	/**
	 * @param bool $read The read status. Expected values: true/false
	 * @param int $userId The user ID for which the conversations will be marked as read/unread. Expected format: 1
	 * @param array $uuids The list of conversations UUID's to update read status. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function __construct(
		protected bool $read,
		protected int $userId,
		protected array $uuids,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['read' => $this->read, 'userId' => $this->userId, 'uuids' => $this->uuids]);
	}
}
