<?php

namespace PlentyOne\Api\Requests\Batch;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Make batch requests
 *
 * Pass up to 20 operations into a single HTTP request.
 */
class MakeBatchRequests extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/batch";
	}


	public function __construct()
	{
	}
}
