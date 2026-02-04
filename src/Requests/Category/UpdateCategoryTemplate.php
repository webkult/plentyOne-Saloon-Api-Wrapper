<?php

namespace PlentyOne\Api\Requests\Category;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a category template
 *
 * Updates a category template. The ID of the category, the plenty ID of the client (store) and the
 * language must be specified.
 */
class UpdateCategoryTemplate extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/categories/{$this->id}/templates";
	}


	/**
	 * @param int $id
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
