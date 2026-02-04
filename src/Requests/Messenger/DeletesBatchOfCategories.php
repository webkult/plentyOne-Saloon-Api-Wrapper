<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Deletes a batch of categories
 *
 * Deletes a batch of categories
 */
class DeletesBatchOfCategories extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/categories";
	}


	/**
	 * @param array $ids Array of conversation categories ID's. Expected values: [1, 2]
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
