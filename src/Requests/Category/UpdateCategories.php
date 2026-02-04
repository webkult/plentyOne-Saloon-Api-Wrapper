<?php

namespace PlentyOne\Api\Requests\Category;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update categories
 *
 * Updates existing categories.
 */
class UpdateCategories extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/categories";
	}


	public function __construct()
	{
	}
}
