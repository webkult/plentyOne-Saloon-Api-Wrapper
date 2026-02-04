<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get list of sync intervals.
 *
 * Gets list of sync intervals.
 */
class GetListOfSyncIntervals extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/intervals";
	}


	public function __construct()
	{
	}
}
