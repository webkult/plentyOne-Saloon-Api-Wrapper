<?php

namespace PlentyOne\Api\Requests\Log;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Save config
 *
 * Saves a configuration
 */
class SaveConfig extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/logs/settings";
	}


	public function __construct()
	{
	}
}
