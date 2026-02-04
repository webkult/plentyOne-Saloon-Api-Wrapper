<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update an item set component
 *
 * Updates an item set component. The ID of the set and the component must be specified
 */
class UpdateItemSetComponent extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/item_sets/{$this->setId}/components/{$this->id}";
	}


	/**
	 * @param int $setId
	 * @param int $id
	 */
	public function __construct(
		protected int $setId,
		protected int $id,
	) {
	}
}
