<?php

namespace PlentyOne\Api\Requests\Tag;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a tag relationship
 *
 * Deletes a tag relationship. The ID of the tag relationship must be specified.
 */
class DeleteTagRelationship extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/tags/relationships/{$this->relationshipId}";
	}


	/**
	 * @param int $relationshipId The ID of the tag relationship
	 */
	public function __construct(
		protected int $relationshipId,
	) {
	}
}
