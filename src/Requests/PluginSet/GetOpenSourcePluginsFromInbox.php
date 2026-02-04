<?php

namespace PlentyOne\Api\Requests\PluginSet;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get open source plugins from inbox
 *
 * Gets all the open source plugins from the Inbox.
 */
class GetOpenSourcePluginsFromInbox extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/plugin_sets/s3-inbox-opensource-plugins";
	}


	public function __construct()
	{
	}
}
