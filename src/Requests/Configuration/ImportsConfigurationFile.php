<?php

namespace PlentyOne\Api\Requests\Configuration;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Imports a configuration file
 *
 * Imports a previously exported configuration file for a specific plugin and plugin set.
 */
class ImportsConfigurationFile extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/plugins/plugin_sets/{$this->pluginSetId}/configurations/import";
	}


	/**
	 * @param int $pluginSetId
	 */
	public function __construct(
		protected int $pluginSetId,
	) {
	}
}
