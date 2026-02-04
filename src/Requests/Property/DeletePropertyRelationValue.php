<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a property relation value
 *
 * Deletes a property relation value. The ID of the relation value must be specified.
 */
class DeletePropertyRelationValue extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/uuid/relations/values/{$this->relationValueId}";
	}


	/**
	 * @param int $relationValueId The ID of the relation value
	 */
	public function __construct(
		protected int $relationValueId,
	) {
	}
}
