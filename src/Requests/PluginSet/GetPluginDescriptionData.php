<?php

namespace PlentyOne\Api\Requests\PluginSet;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get plugin description data
 *
 * Gets info about the plugin, based on the plugin name.
 */
class GetPluginDescriptionData extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/plugin_sets_new/plugin_details/{$this->pluginName}/{$this->variationId}";
	}


	/**
	 * @param int $pluginName
	 * @param int $variationId
	 */
	public function __construct(
		protected int $pluginName,
		protected int $variationId,
	) {
	}
}
