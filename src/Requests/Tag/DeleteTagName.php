<?php

namespace PlentyOne\Api\Requests\Tag;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a tag name
 *
 * Deletes a tag name. The ID of the tag name must be specified.
 */
class DeleteTagName extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/tags/names/{$this->id}";
	}


	/**
	 * @param int $id The ID of the tag name
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
