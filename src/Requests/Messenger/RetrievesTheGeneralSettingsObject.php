<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Retrieves the general settings object
 *
 * Retrieves the general settings object
 */
class RetrievesTheGeneralSettingsObject extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/messenger/settings";
	}


	public function __construct()
	{
	}
}
