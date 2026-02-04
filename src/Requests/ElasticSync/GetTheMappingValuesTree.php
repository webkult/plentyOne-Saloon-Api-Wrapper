<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the mapping values tree.
 *
 * Gets the mapping values. Sync data type is required.
 */
class GetTheMappingValuesTree extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/mapping/map/tree";
	}


	public function __construct()
	{
	}
}
