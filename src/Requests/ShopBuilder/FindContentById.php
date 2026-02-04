<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Find a content by ID.
 *
 * Finds a ShopBuilder content by its ID.
 */
class FindContentById extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/shop_builder/contents/{$this->contentId}";
	}


	/**
	 * @param int $contentId ID of the content to get data for.
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
