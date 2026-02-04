<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Updates priority for a batch of conversations
 *
 * Updates priority for a batch of conversations
 */
class UpdatesPriorityForBatchOfConversations extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/priority";
	}


	/**
	 * @param int $priorityId The new priority. Expected values: 0/1/2/3/4/5
	 * @param array $uuids The list of conversations UUID's to update priority. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function __construct(
		protected int $priorityId,
		protected array $uuids,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['priorityId' => $this->priorityId, 'uuids' => $this->uuids]);
	}
}
