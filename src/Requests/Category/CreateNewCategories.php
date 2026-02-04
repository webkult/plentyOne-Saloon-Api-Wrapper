<?php

namespace PlentyOne\Api\Requests\Category;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create new categories
 *
 * Creates new categories.
 */
class CreateNewCategories extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/categories";
	}


	public function __construct()
	{
	}
}
