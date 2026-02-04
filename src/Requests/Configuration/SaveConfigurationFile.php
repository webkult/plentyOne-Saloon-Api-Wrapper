<?php

namespace PlentyOne\Api\Requests\Configuration;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Save configuration file
 *
 * Saves the configuration file for a specific plugin based on its ID and the plugin set.
 */
class SaveConfigurationFile extends Request
{
	protected Method $method = Method::PUT;


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
