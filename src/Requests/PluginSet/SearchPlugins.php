<?php

namespace PlentyOne\Api\Requests\PluginSet;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search plugins
 *
 * Searches for plugins. The search can be refined with numerous parameters.
 */
class SearchPlugins extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/plugin_sets/{$this->setId}/plugins/search";
	}


	/**
	 * @param int $setId
	 * @param null|int $pluginSetId Search for plugins from a specific plugin set.
	 * @param null|string $name Search for plugins with a specific name.
	 * @param null|bool $inStage Search for plugins that are in stage.
	 * @param null|bool $inProductive Search for plugins that are in productive.
	 * @param null|string $type Search for plugins of a given type. Available types are 'Template' and 'Export'.
	 * @param null|bool $checkRequirements Add the requirements to the response. This will add the 'notInstalledRequirements',
	 *      * 'notActiveStageRequirements' and 'notActiveProductiveRequirements' fields to the returned plugin model(s).
	 * @param null|bool $checkUpdate Check for updates. If an update for a plugin is available, this will add the
	 *      * 'updateInformation' field to the returned plugin model(s).
	 * @param null|string $source Search for plugins from a specific source. Available sources are 'marketplace', 'git', and
	 *      * 'local'.
	 * @param null|bool $installed Only search for installed / not installed plugins.
	 * @param null|bool $active Only search for plugins that are active / inactive.
	 * @param null|int $itemsPerPage How many plugins to include per page of the search result.
	 */
	public function __construct(
		protected int $setId,
		protected ?int $pluginSetId = null,
		protected ?string $name = null,
		protected ?bool $inStage = null,
		protected ?bool $inProductive = null,
		protected ?string $type = null,
		protected ?bool $checkRequirements = null,
		protected ?bool $checkUpdate = null,
		protected ?string $source = null,
		protected ?bool $installed = null,
		protected ?bool $active = null,
		protected ?int $itemsPerPage = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'pluginSetId' => $this->pluginSetId,
			'name' => $this->name,
			'in-stage' => $this->inStage,
			'in-productive' => $this->inProductive,
			'type' => $this->type,
			'checkRequirements' => $this->checkRequirements,
			'checkUpdate' => $this->checkUpdate,
			'source' => $this->source,
			'installed' => $this->installed,
			'active' => $this->active,
			'itemsPerPage' => $this->itemsPerPage,
		]);
	}
}
