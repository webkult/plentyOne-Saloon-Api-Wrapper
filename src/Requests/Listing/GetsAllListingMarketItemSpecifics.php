<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Gets all ListingMarketItemSpecifics.
 *
 * Can be filtered by ID, listingMarketId, name and value.
 */
class GetsAllListingMarketItemSpecifics extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/markets/item_specifics/find";
	}


	public function __construct()
	{
	}
}
