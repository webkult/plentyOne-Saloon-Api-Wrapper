<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a content link.
 *
 * Update a content link.
 */
class UpdateContentLink extends Request
{
	protected Method $method = Method::PUT;


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
