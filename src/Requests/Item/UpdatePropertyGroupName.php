<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a property group name
 *
 * Updates a property group name. The ID of the property group and the language must be specified.
 */
class UpdatePropertyGroupName extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/items/property_groups/{$this->id}/names/{$this->lang}";
	}


	/**
	 * @param int $id
	 * @param int $lang
	 */
	public function __construct(
		protected int $id,
		protected int $lang,
	) {
	}
}
