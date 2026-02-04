<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Bulk update category links
 *
 * Updates up to 50 links between variations and categories. The ID of the variations and the ID of the
 * categories must be specified.
 */
class BulkUpdateCategoryLinks extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/items/variations/variation_categories";
	}


	public function __construct()
	{
	}
}
