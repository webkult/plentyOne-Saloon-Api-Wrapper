<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete variation default categories
 *
 * Deletes a list of variation default categories.
 */
class DeleteVariationDefaultCategories extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/default_categories";
	}


	public function __construct()
	{
	}
}
