<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Updates the general settings object
 *
 * Updates the general settings object
 */
class UpdatesTheGeneralSettingsObject extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/messenger/settings";
	}


	public function __construct()
	{
	}
}
