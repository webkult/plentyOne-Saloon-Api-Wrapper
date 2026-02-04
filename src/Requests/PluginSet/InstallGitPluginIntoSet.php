<?php

namespace PlentyOne\Api\Requests\PluginSet;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Install a git plugin into a set
 *
 * Installs a git plugin into a set. Response content will be in the form ['gitPluginInstalled' =>
 * 'true' / 'false'].
 */
class InstallGitPluginIntoSet extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/plugin_sets/{$this->setId}/plugins/{$this->pluginId}/install_git_plugin";
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
