<?php

namespace PlentyOne\Api\Requests\Plugins;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a plugin
 *
 * Deletes a plugin. This call also deletes all plugin files in the inbox folder! To commit the
 * deletion, the
 * plugin must be provisioned in Stage or Productive. The ID of the plugin must be
 * specified.
 */
class DeletePlugin extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/plugins/{$this->pluginId}/plugin_sets/{$this->pluginSetId}";
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
