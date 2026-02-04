<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete the file of a property relation
 *
 * Delete the file of a property relation. The ID of the property relation must be specified.
 */
class DeleteTheFileOfPropertyRelation extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/relations/{$this->relationId}/file";
	}


	/**
	 * @param int $relationId The ID of the property relation
	 */
	public function __construct(
		protected int $relationId,
	) {
	}
}
