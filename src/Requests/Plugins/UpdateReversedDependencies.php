<?php

namespace PlentyOne\Api\Requests\Plugins;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update reversed dependencies
 *
 * Updates the dependencies that's needed for the plugin
 */
class UpdateReversedDependencies extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/plugin_sets/{$this->pluginSetId}/updateReversedDependencies";
	}


	/**
	 * @param int $pluginSetId
	 */
	public function __construct(
		protected int $pluginSetId,
	) {
	}
}
