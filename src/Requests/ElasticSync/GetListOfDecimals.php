<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get list of decimals.
 *
 * Gets list of decimals.
 */
class GetListOfDecimals extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/matching/decimals";
	}


	public function __construct()
	{
	}
}
