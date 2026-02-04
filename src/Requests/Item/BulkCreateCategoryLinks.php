<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Bulk create category links
 *
 * Creates up to 50 links between variations and categories. The ID of the variations and the ID of the
 * categories must be specified.
 */
class BulkCreateCategoryLinks extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/items/variations/variation_categories";
	}


	public function __construct()
	{
	}
}
