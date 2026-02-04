<?php

namespace PlentyOne\Api\Requests\Log;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Show config.
 *
 * Shows a configuration.
 */
class ShowConfig extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/logs/settings";
	}


	public function __construct()
	{
	}
}
