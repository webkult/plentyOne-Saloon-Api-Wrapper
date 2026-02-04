<?php

namespace PlentyOne\Api\Requests\PluginSet;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get git plugin description data
 *
 * Gets info about a git plugin based on the plugin name.
 */
class GetGitPluginDescriptionData extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/plugin_sets_new/git_plugin_details/{$this->pluginName}";
	}


	/**
	 * @param int $pluginName
	 */
	public function __construct(
		protected int $pluginName,
	) {
	}
}
