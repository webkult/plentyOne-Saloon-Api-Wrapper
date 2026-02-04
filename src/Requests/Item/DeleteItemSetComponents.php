<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete item set components
 *
 * Deletes item set components. The ID of the set and the component must be specified
 */
class DeleteItemSetComponents extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/item_sets/{$this->setId}/components";
	}


	/**
	 * @param int $setId
	 */
	public function __construct(
		protected int $setId,
	) {
	}
}
