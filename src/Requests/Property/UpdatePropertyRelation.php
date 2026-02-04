<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a property relation
 *
 * Updates a property relation. The ID of the relation must be specified.
 */
class UpdatePropertyRelation extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/uuid/relations/{$this->relationId}";
	}


	/**
	 * @param int $relationId The ID of the relation
	 */
	public function __construct(
		protected int $relationId,
	) {
	}
}
