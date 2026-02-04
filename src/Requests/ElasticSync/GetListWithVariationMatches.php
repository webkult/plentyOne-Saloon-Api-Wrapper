<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a list with variation matches.
 *
 * Get a list with variation matches.
 */
class GetListWithVariationMatches extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/mapping/variation";
	}


	public function __construct()
	{
	}
}
