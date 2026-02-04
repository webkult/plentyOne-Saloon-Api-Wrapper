<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a property selection
 *
 * Deletes a property selection. The ID of the property must be specified.
 */
class DeletePropertySelection extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/properties/{$this->propertyId}/selections/{$this->id}";
	}


	/**
	 * @param int $propertyId
	 * @param int $id
	 */
	public function __construct(
		protected int $propertyId,
		protected int $id,
	) {
	}
}
