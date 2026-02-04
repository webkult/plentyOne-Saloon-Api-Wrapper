<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a property name
 *
 * Updates a property name. The ID of the property and the language code must be specified.
 */
class UpdatePropertyName extends Request
{
	protected Method $method = Method::PUT;


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
