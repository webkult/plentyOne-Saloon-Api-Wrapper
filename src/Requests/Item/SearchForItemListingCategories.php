<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search for item listing categories
 *
 * Searches for item listing categories. The following 3 filter are mandatory: market and marketSideId.
 * parentId is optional.
 */
class SearchForItemListingCategories extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/listings/categories";
	}


	public function __construct()
	{
	}
}
