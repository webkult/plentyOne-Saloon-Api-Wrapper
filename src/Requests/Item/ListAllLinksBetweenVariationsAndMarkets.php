<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all links between variations and markets
 *
 * Lists all links between variations and markets.
 * Results can be filtered by the ID of the variation
 * and by the ID of the market, e.g. "variationId=1030"
 * lists all links of the variation with the ID
 * 1030.
 */
class ListAllLinksBetweenVariationsAndMarkets extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/variations/variation_markets";
	}


	public function __construct()
	{
	}
}
