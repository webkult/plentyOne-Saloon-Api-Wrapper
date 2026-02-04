<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List item set components of an item set
 *
 * Lists the item set components of an item set. The ID of the item set must be specified.
 */
class ListItemSetComponentsOfItemSet extends Request
{
	protected Method $method = Method::GET;


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
