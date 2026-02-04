<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\ShopBuilder\CompileSingleSassFile;
use PlentyOne\Api\Requests\ShopBuilder\CreateNewContent;
use PlentyOne\Api\Requests\ShopBuilder\DeleteContent;
use PlentyOne\Api\Requests\ShopBuilder\DeleteContentLink;
use PlentyOne\Api\Requests\ShopBuilder\DuplicateContentById;
use PlentyOne\Api\Requests\ShopBuilder\FindContentById;
use PlentyOne\Api\Requests\ShopBuilder\GeneratePreviewLinkForContentLink;
use PlentyOne\Api\Requests\ShopBuilder\GenerateTemplatesForAllContents;
use PlentyOne\Api\Requests\ShopBuilder\GetContentLink;
use PlentyOne\Api\Requests\ShopBuilder\GetContentsOfAllShopBuilderJsonFilesFromAllFrontendPlugins;
use PlentyOne\Api\Requests\ShopBuilder\GetCrossOriginHeaders;
use PlentyOne\Api\Requests\ShopBuilder\GetGlobalSettingsDefinedByFrontendPluginsInShopBuilderJsonFiles;
use PlentyOne\Api\Requests\ShopBuilder\GetSingleEntityFromSpecifiedSource;
use PlentyOne\Api\Requests\ShopBuilder\LinkContentToLayoutContainer;
use PlentyOne\Api\Requests\ShopBuilder\ListAllContents;
use PlentyOne\Api\Requests\ShopBuilder\ListAllWidgets;
use PlentyOne\Api\Requests\ShopBuilder\ListContentLinks;
use PlentyOne\Api\Requests\ShopBuilder\ListContentPages;
use PlentyOne\Api\Requests\ShopBuilder\ListContentVersions;
use PlentyOne\Api\Requests\ShopBuilder\RenderThePreviewForWidgets;
use PlentyOne\Api\Requests\ShopBuilder\ResolveDataFieldProviderClassAndReturnAllRegisteredEntriesAndChildProviders;
use PlentyOne\Api\Requests\ShopBuilder\RestoreContentVersion;
use PlentyOne\Api\Requests\ShopBuilder\SearchForContents;
use PlentyOne\Api\Requests\ShopBuilder\SearchInMultipleSources;
use PlentyOne\Api\Requests\ShopBuilder\UpdateContent;
use PlentyOne\Api\Requests\ShopBuilder\UpdateContentLink;
use PlentyOne\Api\Requests\ShopBuilder\UpdateGlobalSettingsByCallingRegisteredSettingsHandlerForEachFrontendPlugin;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class ShopBuilder extends BaseResource
{
	public function listContentLinks(): Response
	{
		return $this->connector->send(new ListContentLinks());
	}


	public function linkContentToLayoutContainer(): Response
	{
		return $this->connector->send(new LinkContentToLayoutContainer());
	}


	/**
	 * @param int $contentLinkId
	 */
	public function getContentLink(int $contentLinkId): Response
	{
		return $this->connector->send(new GetContentLink($contentLinkId));
	}


	/**
	 * @param int $contentLinkId
	 */
	public function updateContentLink(int $contentLinkId): Response
	{
		return $this->connector->send(new UpdateContentLink($contentLinkId));
	}


	/**
	 * @param int $contentLinkId
	 */
	public function deleteContentLink(int $contentLinkId): Response
	{
		return $this->connector->send(new DeleteContentLink($contentLinkId));
	}


	/**
	 * @param int $contentLinkId
	 */
	public function generatePreviewLinkForContentLink(int $contentLinkId): Response
	{
		return $this->connector->send(new GeneratePreviewLinkForContentLink($contentLinkId));
	}


	public function listAllContents(): Response
	{
		return $this->connector->send(new ListAllContents());
	}


	/**
	 * @param string $containerName The ID of the plugin set to rebuild contents for.
	 * @param int $pluginSetId Layout container to regenerate contents for.
	 */
	public function generateTemplatesForAllContents(?string $containerName = null, ?int $pluginSetId = null): Response
	{
		return $this->connector->send(new GenerateTemplatesForAllContents($containerName, $pluginSetId));
	}


	/**
	 * @param string $frontendLang Language to be used when rendering frontend widgets.
	 */
	public function createNewContent(?string $frontendLang = null): Response
	{
		return $this->connector->send(new CreateNewContent($frontendLang));
	}


	/**
	 * @param int $page The page of results to search for
	 * @param int $itemsPerPage The number of items to list per page
	 * @param string $dataProviderName Name of the content
	 * @param string $type Type of the content
	 * @param string $containerName Name of the linked container
	 * @param int $pluginSetId Id of the linked plugin set
	 * @param string $language Language of the content link
	 * @param int $active Active state of the content link
	 * @param int $contentLinkId IDs of the related content link
	 * @param int $relatedContentType Filter contents related to a specific type
	 * @param int $relatedContainerName Filter contents related to a specific container
	 */
	public function searchForContents(
		?int $page = null,
		?int $itemsPerPage = null,
		?string $dataProviderName = null,
		?string $type = null,
		?string $containerName = null,
		?int $pluginSetId = null,
		?string $language = null,
		?int $active = null,
		?int $contentLinkId = null,
		?int $relatedContentType = null,
		?int $relatedContainerName = null,
	): Response
	{
		return $this->connector->send(new SearchForContents($page, $itemsPerPage, $dataProviderName, $type, $containerName, $pluginSetId, $language, $active, $contentLinkId, $relatedContentType, $relatedContainerName));
	}


	/**
	 * @param int $contentId ID of the content to get data for.
	 * @param string $frontendLang Language to be used when rendering frontend widgets.
	 */
	public function findContentById(int $contentId, ?string $frontendLang = null): Response
	{
		return $this->connector->send(new FindContentById($contentId, $frontendLang));
	}


	/**
	 * @param int $contentId The ID of the content to update.
	 * @param string $frontendLang Language to be used when rendering frontend widgets.
	 */
	public function updateContent(int $contentId, ?string $frontendLang = null): Response
	{
		return $this->connector->send(new UpdateContent($contentId, $frontendLang));
	}


	/**
	 * @param int $contentId The ID of the content to duplicate.
	 * @param int $targetPluginSetId ID of the plugin set to link the duplicate to.
	 * @param string $language Language to link the duplicate to.
	 * @param string $containerName Layout container to link the duplicate to.
	 * @param string $contentName Name of the duplicted content.
	 */
	public function duplicateContentById(
		int $contentId,
		?int $targetPluginSetId = null,
		?string $language = null,
		?string $containerName = null,
		?string $contentName = null,
	): Response
	{
		return $this->connector->send(new DuplicateContentById($contentId, $targetPluginSetId, $language, $containerName, $contentName));
	}


	/**
	 * @param int $contentId The ID of the content to delete.
	 */
	public function deleteContent(int $contentId): Response
	{
		return $this->connector->send(new DeleteContent($contentId));
	}


	/**
	 * @param int $contentId
	 */
	public function getCrossOriginHeaders(int $contentId): Response
	{
		return $this->connector->send(new GetCrossOriginHeaders($contentId));
	}


	/**
	 * @param int $contentId ID of the content to get versions for.
	 * @param int $itemsPerPage The number of items to list per page.
	 * @param string $versionIdMarker ID of a version to get subsequent versions from.
	 */
	public function listContentVersions(
		int $contentId,
		?int $itemsPerPage = null,
		?string $versionIdMarker = null,
	): Response
	{
		return $this->connector->send(new ListContentVersions($contentId, $itemsPerPage, $versionIdMarker));
	}


	/**
	 * @param int $contentId The ID of the content to be restored to a previous version.
	 * @param string $versionId ID of the version to restore the content to.
	 */
	public function restoreContentVersion(int $contentId, string $versionId): Response
	{
		return $this->connector->send(new RestoreContentVersion($contentId, $versionId));
	}


	/**
	 * @param string $providerClass Class name of the data field provider to resolve.
	 */
	public function resolveDataFieldProviderClassAndReturnAllRegisteredEntriesAndChildProviders(
		?string $providerClass = null,
	): Response
	{
		return $this->connector->send(new ResolveDataFieldProviderClassAndReturnAllRegisteredEntriesAndChildProviders($providerClass));
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function getCrossOriginHeadersDuplicate1(): Response
	{
		return $this->connector->send(new GetCrossOriginHeaders());
	}


	/**
	 * @param int $pluginSetId Id of the plugin set to read frontend configurations for.
	 */
	public function getContentsOfAllShopBuilderJsonFilesFromAllFrontendPlugins(?int $pluginSetId = null): Response
	{
		return $this->connector->send(new GetContentsOfAllShopBuilderJsonFilesFromAllFrontendPlugins($pluginSetId));
	}


	public function getGlobalSettingsDefinedByFrontendPluginsInShopBuilderJsonFiles(): Response
	{
		return $this->connector->send(new GetGlobalSettingsDefinedByFrontendPluginsInShopBuilderJsonFiles());
	}


	public function updateGlobalSettingsByCallingRegisteredSettingsHandlerForEachFrontendPlugin(): Response
	{
		return $this->connector->send(new UpdateGlobalSettingsByCallingRegisteredSettingsHandlerForEachFrontendPlugin());
	}


	public function listContentPages(): Response
	{
		return $this->connector->send(new ListContentPages());
	}


	/**
	 * @param string $path The path to the sass file to be compiled.
	 * @param string $variables An optional sass formatted string to be prepended to the file content.
	 */
	public function compileSingleSassFile(?string $path = null, ?string $variables = null): Response
	{
		return $this->connector->send(new CompileSingleSassFile($path, $variables));
	}


	/**
	 * @param string $query The query to search for.
	 * @param int $maxPerSource Maximum number of results per search source.
	 * @param array $sources Sources to consider during search.
	 */
	public function searchInMultipleSources(
		?string $query = null,
		?int $maxPerSource = null,
		?array $sources = null,
	): Response
	{
		return $this->connector->send(new SearchInMultipleSources($query, $maxPerSource, $sources));
	}


	/**
	 * @param string $source The source to get the entry for.
	 * @param int $id
	 */
	public function getSingleEntityFromSpecifiedSource(string $source, int $id): Response
	{
		return $this->connector->send(new GetSingleEntityFromSpecifiedSource($source, $id));
	}


	/**
	 * @param string $identifier Filter results by widget identifier.
	 * @param string $contentType Filter results that are allowed for the given content type.
	 */
	public function listAllWidgets(?string $identifier = null, ?string $contentType = null): Response
	{
		return $this->connector->send(new ListAllWidgets($identifier, $contentType));
	}


	/**
	 * @param string $frontendLang Language to be used when rendering frontend widgets.
	 * @param string $contentType Provide a content type to widgets should be rendered within.
	 */
	public function renderThePreviewForWidgets(?string $frontendLang = null, ?string $contentType = null): Response
	{
		return $this->connector->send(new RenderThePreviewForWidgets($frontendLang, $contentType));
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function getCrossOriginHeadersDuplicate2(): Response
	{
		return $this->connector->send(new GetCrossOriginHeaders());
	}
}
