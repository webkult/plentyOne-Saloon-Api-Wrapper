<?php

namespace PlentyOne\Api\Requests\Log;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get integration keys
 *
 * Get the log integration keys.
 */
class GetIntegrationKeys extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/logs/integration_keys";
	}


	public function __construct()
	{
	}
}
