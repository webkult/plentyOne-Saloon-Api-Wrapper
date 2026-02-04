<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Create and update a list of variation default categories
 *
 * Creates and updates a list of variation default categories.
 */
class CreateAndUpdateListOfVariationDefaultCategories extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/default_categories";
	}


	public function __construct()
	{
	}
}
