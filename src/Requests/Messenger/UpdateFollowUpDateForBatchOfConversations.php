<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update follow up date for a batch of conversations
 *
 * Update follow up date for a batch of conversations
 */
class UpdateFollowUpDateForBatchOfConversations extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/followUpDate";
	}


	/**
	 * @param string $followUpDate The new follow up date. Expected format: 2023/01/31
	 * @param array $uuids The list of conversations UUID's to update deadline. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function __construct(
		protected string $followUpDate,
		protected array $uuids,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['followUpDate' => $this->followUpDate, 'uuids' => $this->uuids]);
	}
}
