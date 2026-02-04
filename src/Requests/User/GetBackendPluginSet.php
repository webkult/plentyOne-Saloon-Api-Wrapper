<?php

namespace PlentyOne\Api\Requests\User;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get backend plugin set
 *
 * Get the backend plugin set for user
 */
class GetBackendPluginSet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/user/backend_pluginset";
	}


	public function __construct()
	{
	}
}
