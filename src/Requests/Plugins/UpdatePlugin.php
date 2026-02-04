<?php

namespace PlentyOne\Api\Requests\Plugins;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a plugin
 *
 * Updates a plugin. The plugin position can be changed. The plugin can be activated or deactivated for
 * Stage or
 * Productive. The plugin can be activated or deactivated for online stores. The ID of the
 * plugin must be
 * specified.
 */
class UpdatePlugin extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/plugins/{$this->pluginId}";
	}


	/**
	 * @param int $pluginId
	 */
	public function __construct(
		protected int $pluginId,
	) {
	}
}
