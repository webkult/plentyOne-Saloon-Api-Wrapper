<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Reset the cache.
 *
 * Resets the cache.
 */
class ResetTheCache extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/reset-cache";
	}


	public function __construct()
	{
	}
}
