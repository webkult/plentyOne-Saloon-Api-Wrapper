<?php

namespace PlentyOne\Api\Requests\Category;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Updates one category
 *
 * Updates an existing category. The ID of the category must be specified.
 */
class UpdatesOneCategory extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/categories/{$this->id}";
	}


	/**
	 * @param int $id
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
