<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Deletes a batch of statuses
 *
 * Deletes a batch of statuses
 */
class DeletesBatchOfStatuses extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/statuses";
	}


	/**
	 * @param array $ids Array of conversation statuses ID's. Expected values: [1, 2]
	 */
	public function __construct(
		protected array $ids,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['ids' => $this->ids]);
	}
}
