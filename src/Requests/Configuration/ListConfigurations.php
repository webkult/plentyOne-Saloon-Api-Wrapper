<?php

namespace PlentyOne\Api\Requests\Configuration;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List configurations
 *
 * Loads detailed configuration of a plugin based on its ID and plugin set ID.
 */
class ListConfigurations extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/plugins/{$this->pluginId}/plugin_sets/{$this->pluginSetId}/configurations";
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
