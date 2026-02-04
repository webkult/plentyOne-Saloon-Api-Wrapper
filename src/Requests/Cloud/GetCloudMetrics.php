<?php

namespace PlentyOne\Api\Requests\Cloud;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get cloud metrics
 *
 * Get the cloud metrics for this system
 */
class GetCloudMetrics extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/system/cloud/metrics";
	}


	public function __construct()
	{
	}
}
