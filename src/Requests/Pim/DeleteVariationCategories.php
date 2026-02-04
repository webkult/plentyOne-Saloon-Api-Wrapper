<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete variation categories
 *
 * Deletes a list of variation categories.
 */
class DeleteVariationCategories extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/categories";
	}


	public function __construct()
	{
	}
}
