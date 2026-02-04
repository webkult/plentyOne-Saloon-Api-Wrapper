<?php

namespace PlentyOne\Api\Requests\Tag;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get tag by ID
 *
 * Gets a tag by the ID. The ID of the tag must be specified.
 */
class GetTagById extends Request
{
	protected Method $method = Method::GET;


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
