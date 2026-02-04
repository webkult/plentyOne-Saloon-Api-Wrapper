<?php

namespace PlentyOne\Api\Requests\Tag;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a tag
 *
 * Deletes a tag. The ID of the tag must be specified.
 */
class DeleteTag extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/tags/{$this->tagId}";
	}


	/**
	 * @param int $tagId The ID of the tag
	 */
	public function __construct(
		protected int $tagId,
	) {
	}
}
