<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a property relation value
 *
 * Updates a property relation value. The ID of the relation value must be specified.
 */
class UpdatePropertyRelationValue extends Request
{
	protected Method $method = Method::PUT;


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
