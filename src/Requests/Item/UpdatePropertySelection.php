<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a property selection
 *
 * Updates a property selection.
 */
class UpdatePropertySelection extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/items/properties/{$this->propertyId}/selections/{$this->id}/{$this->lang}";
	}


	/**
	 * @param int $propertyId
	 * @param int $id
	 * @param int $lang
	 */
	public function __construct(
		protected int $propertyId,
		protected int $id,
		protected int $lang,
	) {
	}
}
