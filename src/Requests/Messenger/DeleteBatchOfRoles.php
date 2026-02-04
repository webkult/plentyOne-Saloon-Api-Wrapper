<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a batch of roles
 *
 * Delete a batch of roles
 */
class DeleteBatchOfRoles extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/roles";
	}


	/**
	 * @param array $ids Array of conversation roles ID's. Expected values: [1, 2]
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
