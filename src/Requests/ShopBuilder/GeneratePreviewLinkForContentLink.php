<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Generate a preview link for a contentLink.
 *
 * Generate a preview link for a contentLink.
 */
class GeneratePreviewLinkForContentLink extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/shop_builder/content_links/{$this->contentLinkId}/preview_url";
	}


	/**
	 * @param int $contentLinkId
	 */
	public function __construct(
		protected int $contentLinkId,
	) {
	}
}
