<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\PluginSet\AddPluginToSet;
use PlentyOne\Api\Requests\PluginSet\ChangePluginActiveStatusForSet;
use PlentyOne\Api\Requests\PluginSet\CreateSet;
use PlentyOne\Api\Requests\PluginSet\DeleteSet;
use PlentyOne\Api\Requests\PluginSet\GetDetailsAboutPluginSets;
use PlentyOne\Api\Requests\PluginSet\GetGitPluginDescriptionData;
use PlentyOne\Api\Requests\PluginSet\GetOpenSourcePluginsFromInbox;
use PlentyOne\Api\Requests\PluginSet\GetPluginCompatibility;
use PlentyOne\Api\Requests\PluginSet\GetPluginDescriptionData;
use PlentyOne\Api\Requests\PluginSet\GetSet;
use PlentyOne\Api\Requests\PluginSet\GetThePreviewHashForSet;
use PlentyOne\Api\Requests\PluginSet\InstallGitPluginIntoSet;
use PlentyOne\Api\Requests\PluginSet\ListAllPluginTranslationsCsv;
use PlentyOne\Api\Requests\PluginSet\ListAllPluginTranslationsMerged;
use PlentyOne\Api\Requests\PluginSet\ListAllPluginsOfSet;
use PlentyOne\Api\Requests\PluginSet\ListAllSetEntriesOfSet;
use PlentyOne\Api\Requests\PluginSet\ListAllSets;
use PlentyOne\Api\Requests\PluginSet\ListAllThePluginsTranslationsForPluginSet;
use PlentyOne\Api\Requests\PluginSet\ListContainers;
use PlentyOne\Api\Requests\PluginSet\RemovePluginFromSet;
use PlentyOne\Api\Requests\PluginSet\SearchPlugins;
use PlentyOne\Api\Requests\PluginSet\SetPluginPositionInSet;
use PlentyOne\Api\Requests\PluginSet\UpdateAllPluginTranslations;
use PlentyOne\Api\Requests\PluginSet\UpdateSet;
use PlentyOne\Api\Requests\PluginSet\UploadsAndSyncsResources;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class PluginSet extends BaseResource
{
	public function listAllSets(): Response
	{
		return $this->connector->send(new ListAllSets());
	}


	/**
	 * @param int $copyPluginSetId The ID of the plugin set of which to copy the set entries from into the
	 *      * new set
	 */
	public function createSet(?int $copyPluginSetId = null): Response
	{
		return $this->connector->send(new CreateSet($copyPluginSetId));
	}


	public function getDetailsAboutPluginSets(): Response
	{
		return $this->connector->send(new GetDetailsAboutPluginSets());
	}


	public function getThePreviewHashForSet(): Response
	{
		return $this->connector->send(new GetThePreviewHashForSet());
	}


	public function getOpenSourcePluginsFromInbox(): Response
	{
		return $this->connector->send(new GetOpenSourcePluginsFromInbox());
	}


	/**
	 * @param int $pluginSetId
	 * @param int $pluginSetId The ID of the plugin set
	 */
	public function listAllThePluginsTranslationsForPluginSet(int $pluginSetId): Response
	{
		return $this->connector->send(new ListAllThePluginsTranslationsForPluginSet($pluginSetId, $pluginSetId));
	}


	/**
	 * @param int $pluginSetId
	 * @param int $languageCode
	 * @param int $pluginSetId The ID of the plugin set
	 * @param string $languageCode The code of the language
	 */
	public function listAllPluginTranslationsCsv(int $pluginSetId, string $languageCode): Response
	{
		return $this->connector->send(new ListAllPluginTranslationsCsv($pluginSetId, $languageCode, $pluginSetId, $languageCode));
	}


	/**
	 * @param int $pluginSetId
	 */
	public function uploadsAndSyncsResources(int $pluginSetId): Response
	{
		return $this->connector->send(new UploadsAndSyncsResources($pluginSetId));
	}


	/**
	 * @param int $pluginSetId
	 * @param int $targetLanguage
	 * @param int $pluginSetId The ID of the plugin set
	 * @param string $targetLanguage The code of the language we target
	 */
	public function listAllPluginTranslationsMerged(int $pluginSetId, string $targetLanguage): Response
	{
		return $this->connector->send(new ListAllPluginTranslationsMerged($pluginSetId, $targetLanguage, $pluginSetId, $targetLanguage));
	}


	/**
	 * @param int $pluginSetId
	 * @param int $targetLanguage
	 * @param int $pluginSetId The ID of the plugin set
	 * @param string $targetLanguage The code of the language
	 */
	public function updateAllPluginTranslations(int $pluginSetId, string $targetLanguage): Response
	{
		return $this->connector->send(new UpdateAllPluginTranslations($pluginSetId, $targetLanguage, $pluginSetId, $targetLanguage));
	}


	/**
	 * @param int $setId
	 */
	public function getSet(int $setId): Response
	{
		return $this->connector->send(new GetSet($setId));
	}


	/**
	 * @param int $setId
	 */
	public function updateSet(int $setId): Response
	{
		return $this->connector->send(new UpdateSet($setId));
	}


	/**
	 * @param int $setId
	 */
	public function deleteSet(int $setId): Response
	{
		return $this->connector->send(new DeleteSet($setId));
	}


	/**
	 * @param int $setId
	 * @param bool $includeStage Include staged plugins in the result.
	 */
	public function listAllPluginsOfSet(int $setId, ?bool $includeStage = null): Response
	{
		return $this->connector->send(new ListAllPluginsOfSet($setId, $includeStage));
	}


	/**
	 * @param int $setId
	 * @param int $pluginName
	 * @param int $variationId
	 */
	public function getPluginCompatibility(int $setId, int $pluginName, int $variationId): Response
	{
		return $this->connector->send(new GetPluginCompatibility($setId, $pluginName, $variationId));
	}


	/**
	 * @param int $setId
	 * @param int $pluginSetId Search for plugins from a specific plugin set.
	 * @param string $name Search for plugins with a specific name.
	 * @param bool $inStage Search for plugins that are in stage.
	 * @param bool $inProductive Search for plugins that are in productive.
	 * @param string $type Search for plugins of a given type. Available types are 'Template' and 'Export'.
	 * @param bool $checkRequirements Add the requirements to the response. This will add the 'notInstalledRequirements',
	 *      * 'notActiveStageRequirements' and 'notActiveProductiveRequirements' fields to the returned plugin model(s).
	 * @param bool $checkUpdate Check for updates. If an update for a plugin is available, this will add the
	 *      * 'updateInformation' field to the returned plugin model(s).
	 * @param string $source Search for plugins from a specific source. Available sources are 'marketplace', 'git', and
	 *      * 'local'.
	 * @param bool $installed Only search for installed / not installed plugins.
	 * @param bool $active Only search for plugins that are active / inactive.
	 * @param int $itemsPerPage How many plugins to include per page of the search result.
	 */
	public function searchPlugins(
		int $setId,
		?int $pluginSetId = null,
		?string $name = null,
		?bool $inStage = null,
		?bool $inProductive = null,
		?string $type = null,
		?bool $checkRequirements = null,
		?bool $checkUpdate = null,
		?string $source = null,
		?bool $installed = null,
		?bool $active = null,
		?int $itemsPerPage = null,
	): Response
	{
		return $this->connector->send(new SearchPlugins($setId, $pluginSetId, $name, $inStage, $inProductive, $type, $checkRequirements, $checkUpdate, $source, $installed, $active, $itemsPerPage));
	}


	/**
	 * @param int $setId
	 * @param int $pluginId
	 */
	public function changePluginActiveStatusForSet(int $setId, int $pluginId): Response
	{
		return $this->connector->send(new ChangePluginActiveStatusForSet($setId, $pluginId));
	}


	/**
	 * @param int $setId
	 * @param int $pluginId
	 */
	public function addPluginToSet(int $setId, int $pluginId): Response
	{
		return $this->connector->send(new AddPluginToSet($setId, $pluginId));
	}


	/**
	 * @param int $setId
	 * @param int $pluginId
	 */
	public function removePluginFromSet(int $setId, int $pluginId): Response
	{
		return $this->connector->send(new RemovePluginFromSet($setId, $pluginId));
	}


	/**
	 * @param int $setId
	 * @param int $pluginId
	 */
	public function installGitPluginIntoSet(int $setId, int $pluginId): Response
	{
		return $this->connector->send(new InstallGitPluginIntoSet($setId, $pluginId));
	}


	/**
	 * @param int $setId
	 * @param int $pluginId
	 */
	public function setPluginPositionInSet(int $setId, int $pluginId): Response
	{
		return $this->connector->send(new SetPluginPositionInSet($setId, $pluginId));
	}


	/**
	 * @param int $setId
	 */
	public function listAllSetEntriesOfSet(int $setId): Response
	{
		return $this->connector->send(new ListAllSetEntriesOfSet($setId));
	}


	/**
	 * @param int $pluginName
	 */
	public function getGitPluginDescriptionData(int $pluginName): Response
	{
		return $this->connector->send(new GetGitPluginDescriptionData($pluginName));
	}


	/**
	 * @param int $pluginName
	 * @param int $variationId
	 */
	public function getPluginDescriptionData(int $pluginName, int $variationId): Response
	{
		return $this->connector->send(new GetPluginDescriptionData($pluginName, $variationId));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param int $pluginSetId
	 * @param bool $includeStage Include staged plugins in the result.
	 */
	public function listAllPluginsOfSetDuplicate1(int $pluginSetId, ?bool $includeStage = null): Response
	{
		return $this->connector->send(new ListAllPluginsOfSet($pluginSetId, $includeStage));
	}


	/**
	 * @param int $pluginId
	 * @param int $pluginSetId
	 */
	public function listContainers(int $pluginId, int $pluginSetId): Response
	{
		return $this->connector->send(new ListContainers($pluginId, $pluginSetId));
	}
}
