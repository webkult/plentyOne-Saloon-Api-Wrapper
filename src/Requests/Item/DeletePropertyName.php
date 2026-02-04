<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a property name
 *
 * Deletes a property name. The ID of the property must be specified.
 */
class DeletePropertyName extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/properties/{$this->id}/names/{$this->lang}";
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
