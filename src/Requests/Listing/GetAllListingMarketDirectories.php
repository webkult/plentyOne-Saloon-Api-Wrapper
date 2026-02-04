<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all listing market directories
 *
 * Gets all listing market directories.
 */
class GetAllListingMarketDirectories extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/markets/directories";
	}


	public function __construct()
	{
	}
}
