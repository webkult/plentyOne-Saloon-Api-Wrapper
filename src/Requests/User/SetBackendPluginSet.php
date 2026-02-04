<?php

namespace PlentyOne\Api\Requests\User;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Set backend plugin set
 *
 * Set the backend plugin set for user
 */
class SetBackendPluginSet extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/user/backend_pluginset";
	}


	public function __construct()
	{
	}
}
