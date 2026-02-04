<?php

namespace PlentyOne\Api\Requests\Plugins;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Get reversed requirements
 *
 * Gets the requirements based on the plugin name and the plugin set ID.
 */
class GetReversedRequirements extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/plugins/{$this->pluginName}/plugin_sets/{$this->pluginSetId}/reversedDependencies";
	}


	/**
	 * @param int $pluginName
	 * @param int $pluginSetId
	 */
	public function __construct(
		protected int $pluginName,
		protected int $pluginSetId,
	) {
	}
}
