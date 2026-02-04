<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Deletes a batch of types
 *
 * Deletes a batch of types
 */
class DeletesBatchOfTypes extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/types";
	}


	/**
	 * @param array $ids Array of conversation types ID's. Expected values: [1, 2]
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
