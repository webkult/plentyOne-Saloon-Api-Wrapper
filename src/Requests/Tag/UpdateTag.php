<?php

namespace PlentyOne\Api\Requests\Tag;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update tag
 *
 * Updates a tag. The ID of the tag must be specified.
 */
class UpdateTag extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/tags/{$this->id}";
	}


	/**
	 * @param int $id The ID of the tag
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
