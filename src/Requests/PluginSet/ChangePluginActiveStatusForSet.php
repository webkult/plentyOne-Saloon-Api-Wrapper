<?php

namespace PlentyOne\Api\Requests\PluginSet;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Change a plugin's 'active' status for a set.
 *
 * Activates / deactivates a plugin for a set by trashing or restoring the respective set entry. Both
 * the plugin set's ID and the plugin's ID must be provided
 */
class ChangePluginActiveStatusForSet extends Request
{
	protected Method $method = Method::PUT;


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
