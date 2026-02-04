<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update deadline for a batch of conversations
 *
 * Update deadline for a batch of conversations
 */
class UpdateDeadlineForBatchOfConversations extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/deadline";
	}


	/**
	 * @param string $deadline The new deadline. Expected format: 2023/01/31
	 * @param array $uuids The list of conversations UUID's to update deadline. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function __construct(
		protected string $deadline,
		protected array $uuids,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['deadline' => $this->deadline, 'uuids' => $this->uuids]);
	}
}
