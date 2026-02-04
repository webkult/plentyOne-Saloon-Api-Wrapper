<?php

namespace PlentyOne\Api\Requests\Bi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Returns list of all saved configurations
 *
 * Returns a list of raw data configurations including their children
 */
class ReturnsListOfAllSavedConfigurations extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/bi/raw-data/config";
	}


	public function __construct()
	{
	}
}
