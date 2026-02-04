<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Updates type and status for a batch of conversations
 *
 * Updates type and status for a batch of conversations
 */
class UpdatesTypeAndStatusForBatchOfConversations extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/type_status";
	}


	/**
	 * @param int $typeId The new type. Expected format: 1
	 * @param int $statusId The new status. Expected format: 1
	 * @param array $uuids The list of conversations UUID's to update type and status. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function __construct(
		protected int $typeId,
		protected int $statusId,
		protected array $uuids,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['typeId' => $this->typeId, 'statusId' => $this->statusId, 'uuids' => $this->uuids]);
	}
}
