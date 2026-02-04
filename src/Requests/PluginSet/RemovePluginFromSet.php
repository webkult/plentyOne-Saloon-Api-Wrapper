<?php

namespace PlentyOne\Api\Requests\PluginSet;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Remove a plugin from a set
 *
 * Removes a plugin from a set and deletes all plugin files. Response content will be 'true' if the
 * deletion was successful,
 * 'false' if not. If no plugin set with the given id can be found or the
 * plugin is not associated to the set, a 404 will be returned.
 */
class RemovePluginFromSet extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/plugin_sets/{$this->setId}/plugins/{$this->pluginId}";
	}


	/**
	 * @param int $setId
	 * @param int $pluginId
	 */
	public function __construct(
		protected int $setId,
		protected int $pluginId,
	) {
	}
}
