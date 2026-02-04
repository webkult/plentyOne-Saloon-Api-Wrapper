<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Adds multiple tags to multiple conversations
 *
 * Adds multiple tags to multiple conversations
 */
class AddsMultipleTagsToMultipleConversations extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/tags";
	}


	/**
	 * @param array $tagIds The list of tags to be added. Expected values: [17, 18]
	 * @param array $uuids Array of conversations UUID's. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function __construct(
		protected array $tagIds,
		protected array $uuids,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['tagIds' => $this->tagIds, 'uuids' => $this->uuids]);
	}
}
