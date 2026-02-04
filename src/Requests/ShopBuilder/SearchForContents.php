<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search for contents.
 *
 * Searches for specific contents based on the provided parameters.
 */
class SearchForContents extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/shop_builder/contents/search";
	}


	/**
	 * @param null|int $page The page of results to search for
	 * @param null|int $itemsPerPage The number of items to list per page
	 * @param null|string $dataProviderName Name of the content
	 * @param null|string $type Type of the content
	 * @param null|string $containerName Name of the linked container
	 * @param null|int $pluginSetId Id of the linked plugin set
	 * @param null|string $language Language of the content link
	 * @param null|int $active Active state of the content link
	 * @param null|int $contentLinkId IDs of the related content link
	 * @param null|int $relatedContentType Filter contents related to a specific type
	 * @param null|int $relatedContainerName Filter contents related to a specific container
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?string $dataProviderName = null,
		protected ?string $type = null,
		protected ?string $containerName = null,
		protected ?int $pluginSetId = null,
		protected ?string $language = null,
		protected ?int $active = null,
		protected ?int $contentLinkId = null,
		protected ?int $relatedContentType = null,
		protected ?int $relatedContainerName = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'dataProviderName' => $this->dataProviderName,
			'type' => $this->type,
			'containerName' => $this->containerName,
			'pluginSetId' => $this->pluginSetId,
			'language' => $this->language,
			'active' => $this->active,
			'contentLinkId' => $this->contentLinkId,
			'relatedContentType' => $this->relatedContentType,
			'relatedContainerName' => $this->relatedContainerName,
		]);
	}
}
