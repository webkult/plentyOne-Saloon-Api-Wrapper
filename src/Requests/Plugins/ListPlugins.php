<?php

namespace PlentyOne\Api\Requests\Plugins;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List plugins
 *
 * Lists all plugins saved in the inbox folder. Plugins that have not been provisioned to Stage or
 * Productive will
 * also be shown.
 */
class ListPlugins extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/plugins/search";
	}


	public function __construct()
	{
	}
}
