<?php

namespace PlentyOne\Api\Requests\PluginSet;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get details about plugin sets
 *
 * Get details about plugin sets (count, limits)
 */
class GetDetailsAboutPluginSets extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/plugin_sets/info";
	}


	public function __construct()
	{
	}
}
