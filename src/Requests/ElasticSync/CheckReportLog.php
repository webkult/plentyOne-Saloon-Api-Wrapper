<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Check Report Log.
 *
 * Check Report Log.
 */
class CheckReportLog extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/reports/availability";
	}


	public function __construct()
	{
	}
}
