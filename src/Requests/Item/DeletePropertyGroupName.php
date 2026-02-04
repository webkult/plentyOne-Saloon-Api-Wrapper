<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a property group name
 *
 * Deletes a property group name. The ID of the property group must be specified.
 */
class DeletePropertyGroupName extends Request
{
	protected Method $method = Method::DELETE;


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
