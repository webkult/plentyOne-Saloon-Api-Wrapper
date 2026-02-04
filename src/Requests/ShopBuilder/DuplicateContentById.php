<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Duplicate a content by ID.
 *
 * Duplicates a ShopBuilder content by ID.
 */
class DuplicateContentById extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/shop_builder/contents/{$this->contentId}";
	}


	/**
	 * @param int $contentId The ID of the content to duplicate.
	 * @param null|int $targetPluginSetId ID of the plugin set to link the duplicate to.
	 * @param null|string $language Language to link the duplicate to.
	 * @param null|string $containerName Layout container to link the duplicate to.
	 * @param null|string $contentName Name of the duplicted content.
	 */
	public function __construct(
		protected int $contentId,
		protected ?int $targetPluginSetId = null,
		protected ?string $language = null,
		protected ?string $containerName = null,
		protected ?string $contentName = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'targetPluginSetId' => $this->targetPluginSetId,
			'language' => $this->language,
			'containerName' => $this->containerName,
			'contentName' => $this->contentName,
		]);
	}
}
