<?php

namespace PlentyOne\Api\Requests\PluginSet;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Set a plugin's position in a set
 *
 * Changes the position of a plugin in a set.
 */
class SetPluginPositionInSet extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/plugin_sets/{$this->setId}/plugins/{$this->pluginId}/setPosition";
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
