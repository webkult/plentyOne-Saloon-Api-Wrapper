<?php

namespace PlentyOne\Api\Requests\Plugins;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a plugin
 *
 * Gets a plugin. The ID of the plugin must be specified.
 */
class GetPlugin extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/plugins/{$this->pluginId}";
	}


	/**
	 * @param int $pluginId
	 */
	public function __construct(
		protected int $pluginId,
	) {
	}
}
