<?php

namespace PlentyOne\Api\Requests\Bi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get list of all raw data creators
 *
 * returns list of raw data creators from plenty modules that were not set hidden (by default)
 */
class GetListOfAllRawDataCreators extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/reports/raw-data/creators";
	}


	public function __construct()
	{
	}
}
