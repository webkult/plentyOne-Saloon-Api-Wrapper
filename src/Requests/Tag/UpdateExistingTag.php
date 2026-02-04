<?php

namespace PlentyOne\Api\Requests\Tag;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update an existing tag
 *
 * Updates an existing tag. The ID of the tag must be specified.
 */
class UpdateExistingTag extends Request
{
	protected Method $method = Method::PUT;


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
