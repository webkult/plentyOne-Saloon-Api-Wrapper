<?php

namespace PlentyOne\Api\Requests\PluginSet;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all the plugins translations for a plugin set
 *
 * Lists all translations for all plugins in a plugin set
 */
class ListAllThePluginsTranslationsForPluginSet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/plugin_sets/{$this->pluginSetId}/languages";
	}


	/**
	 * @param int $pluginSetId
	 * @param int $pluginSetId The ID of the plugin set
	 */
	public function __construct(
		protected int $pluginSetId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['$pluginSetId' => $this->pluginSetId]);
	}
}
