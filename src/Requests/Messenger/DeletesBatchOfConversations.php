<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Deletes a batch of conversations
 *
 * Deletes a batch of conversations (soft delete, conversations will be moved to trash)
 */
class DeletesBatchOfConversations extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations";
	}


	/**
	 * @param array $uuids The list of conversations UUID's to be deleted. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function __construct(
		protected array $uuids,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['uuids' => $this->uuids]);
	}
}
