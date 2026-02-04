<?php

namespace PlentyOne\Api\Requests\Category;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get category tree
 *
 * Gets the category tree of a category. The ID of the category must be specified.
 */
class GetCategoryTree extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/category_branches/{$this->id}";
	}


	/**
	 * @param int $id The unique category ID
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
