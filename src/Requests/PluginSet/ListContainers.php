<?php

namespace PlentyOne\Api\Requests\PluginSet;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List containers
 *
 * Lists all containers of plugins in a set
 */
class ListContainers extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/plugins/{$this->pluginId}/plugin_sets/{$this->pluginSetId}/containers";
	}


	/**
	 * @param int $pluginId
	 * @param int $pluginSetId
	 */
	public function __construct(
		protected int $pluginId,
		protected int $pluginSetId,
	) {
	}
}
