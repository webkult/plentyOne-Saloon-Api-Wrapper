<?php

namespace PlentyOne\Api\Requests\Configuration;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Exports a configuration file
 *
 * Returns a json of the configuration from a specific plugin and plugin set
 */
class ExportsConfigurationFile extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/plugins/plugin_sets/{$this->pluginSetId}/configurations/export";
	}


	/**
	 * @param int $pluginSetId
	 */
	public function __construct(
		protected int $pluginSetId,
	) {
	}
}
