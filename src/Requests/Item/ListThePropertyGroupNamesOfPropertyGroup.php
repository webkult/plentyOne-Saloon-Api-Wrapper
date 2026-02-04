<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List the property group names of a property group
 *
 * Lists the property group names of a property group in all languages. The ID of the property group
 * must be specified.
 */
class ListThePropertyGroupNamesOfPropertyGroup extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/property_groups/{$this->id}/names";
	}


	/**
	 * @param int $id
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
