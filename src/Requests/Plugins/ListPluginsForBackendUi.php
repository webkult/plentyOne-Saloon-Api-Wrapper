<?php

namespace PlentyOne\Api\Requests\Plugins;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List plugins for backend UI
 *
 * Lists all plugins provisioned in Stage or Productive that contain a plugin.js file.
 */
class ListPluginsForBackendUi extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/plugins/ui";
	}


	public function __construct()
	{
	}
}
