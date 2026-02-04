<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a content link.
 *
 * Delete a content link.
 */
class DeleteContentLink extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/shop_builder/content_links/{$this->contentLinkId}";
	}


	/**
	 * @param int $contentLinkId
	 */
	public function __construct(
		protected int $contentLinkId,
	) {
	}
}
