<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get schedule times.
 *
 * Gets schedule times.
 */
class GetScheduleTimes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/schedule/times";
	}


	public function __construct()
	{
	}
}
