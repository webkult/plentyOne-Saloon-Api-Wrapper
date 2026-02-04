<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a content.
 *
 * Updates a ShopBuilder content. If not data are provided, content will be rebuilt.
 */
class UpdateContent extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/shop_builder/contents/{$this->contentId}";
	}


	/**
	 * @param int $contentId The ID of the content to update.
	 * @param null|string $frontendLang Language to be used when rendering frontend widgets.
	 */
	public function __construct(
		protected int $contentId,
		protected ?string $frontendLang = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['frontendLang' => $this->frontendLang]);
	}
}
