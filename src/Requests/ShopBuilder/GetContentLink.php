<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a content link.
 *
 * Get a content link by ID.
 */
class GetContentLink extends Request
{
	protected Method $method = Method::GET;


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
