<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete all property relation values of a specified property relation
 *
 * Delete all property relation values of a specified property relation.
 */
class DeleteAllPropertyRelationValuesOfSpecifiedPropertyRelation extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/relations/{$this->relationId}/values";
	}


	/**
	 * @param int $relationId
	 */
	public function __construct(
		protected int $relationId,
	) {
	}
}
