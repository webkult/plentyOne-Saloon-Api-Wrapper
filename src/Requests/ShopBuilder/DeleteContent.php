<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a content.
 *
 * Deletes a ShopBuilder content.
 */
class DeleteContent extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/shop_builder/contents/{$this->contentId}";
	}


	/**
	 * @param int $contentId The ID of the content to delete.
	 */
	public function __construct(
		protected int $contentId,
	) {
	}
}
