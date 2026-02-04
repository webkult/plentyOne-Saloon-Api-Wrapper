<?php

namespace PlentyOne\Api\Requests\Plugins;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Checks for version constraint
 *
 * Checks if the plugin is compatible with the requirements
 */
class ChecksForVersionConstraint extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/plugins/constraint/version";
	}


	public function __construct()
	{
	}
}
