<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get an item set component
 *
 * Gets an item set component. The ID of the component and the set must be specified
 */
class GetItemSetComponent extends Request
{
	protected Method $method = Method::GET;


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
