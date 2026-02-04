<?php

namespace PlentyOne\Api\Requests\Configuration;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get configuration file
 *
 * Gets the configuration file for a specific plugin based on its ID and plugin set.
 */
class GetConfigurationFile extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/plugins/{$this->pluginId}/plugin_sets/{$this->pluginSetId}/configuration_layout";
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
