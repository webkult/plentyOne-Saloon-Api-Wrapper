<?php

namespace PlentyOne\Api\Requests\PluginSet;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all Plugins of Set
 *
 * Lists all active Plugins of given Set.
 */
class ListAllPluginsOfSet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/plugins/plugin_sets/{$this->pluginSetId}/plugins";
	}


	/**
	 * @param int $pluginSetId
	 * @param null|bool $includeStage Include staged plugins in the result.
	 */
	public function __construct(
		protected int $pluginSetId,
		protected ?bool $includeStage = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['\'includeStage' => $this->includeStage]);
	}
}
