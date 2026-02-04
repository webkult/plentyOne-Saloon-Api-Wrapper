<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a property relation selection
 *
 * Updates a property relation selection. The ID of the relation selection must be specified.
 */
class UpdatePropertyRelationSelection extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/uuid/relations/selections/{$this->relationSelectionId}";
	}


	/**
	 * @param int $relationSelectionId The ID of the relation selection
	 */
	public function __construct(
		protected int $relationSelectionId,
	) {
	}
}
