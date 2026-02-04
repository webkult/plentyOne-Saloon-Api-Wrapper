<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Adds tags to a single conversation
 *
 * Adds tags to a single conversation
 */
class AddsTagsToSingleConversation extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/{$this->uuid5}/tags";
	}


	/**
	 * @param int $uuid5
	 * @param array $tagIds The list of tags to be added. Expected values: [17, 18]
	 */
	public function __construct(
		protected int $uuid5,
		protected array $tagIds,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['tagIds' => $this->tagIds]);
	}
}
