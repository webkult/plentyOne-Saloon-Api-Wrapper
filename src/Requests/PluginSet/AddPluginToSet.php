<?php

namespace PlentyOne\Api\Requests\PluginSet;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Add a plugin to a set
 *
 * Adds a plugin to the set based on its ID and the plugin set's ID.
 */
class AddPluginToSet extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


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
