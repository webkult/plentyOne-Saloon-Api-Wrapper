<?php

namespace PlentyOne\Api\Requests\PluginSet;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get plugin compatibility
 *
 * Checks if the plugin is compatible, based on its requirements.
 */
class GetPluginCompatibility extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/plugin_sets/{$this->setId}/plugins/get_compatibility/{$this->pluginName}/{$this->variationId}";
	}


	/**
	 * @param int $setId
	 * @param int $pluginName
	 * @param int $variationId
	 */
	public function __construct(
		protected int $setId,
		protected int $pluginName,
		protected int $variationId,
	) {
	}
}
