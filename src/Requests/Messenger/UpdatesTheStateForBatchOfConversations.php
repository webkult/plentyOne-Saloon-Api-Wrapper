<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Updates the state for a batch of conversations
 *
 * Updates the state for a batch of conversations
 */
class UpdatesTheStateForBatchOfConversations extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/close";
	}


	/**
	 * @param bool $isClosed The new state of the conversation. Expected values: true/false
	 * @param array $uuids Array of conversations UUID's. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function __construct(
		protected bool $isClosed,
		protected array $uuids,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['isClosed' => $this->isClosed, 'uuids' => $this->uuids]);
	}
}
