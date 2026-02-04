<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List content versions.
 *
 * List versions of a specified content.
 */
class ListContentVersions extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/shop_builder/contents/{$this->contentId}/versions";
	}


	/**
	 * @param int $contentId ID of the content to get versions for.
	 * @param null|int $itemsPerPage The number of items to list per page.
	 * @param null|string $versionIdMarker ID of a version to get subsequent versions from.
	 */
	public function __construct(
		protected int $contentId,
		protected ?int $itemsPerPage = null,
		protected ?string $versionIdMarker = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['itemsPerPage' => $this->itemsPerPage, 'versionIdMarker' => $this->versionIdMarker]);
	}
}
