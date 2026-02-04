<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Render the preview for widgets
 *
 * Render the preview for widgets
 */
class RenderThePreviewForWidgets extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/shop_builder/widgets";
	}


	/**
	 * @param null|string $frontendLang Language to be used when rendering frontend widgets.
	 * @param null|string $contentType Provide a content type to widgets should be rendered within.
	 */
	public function __construct(
		protected ?string $frontendLang = null,
		protected ?string $contentType = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['frontendLang' => $this->frontendLang, 'contentType' => $this->contentType]);
	}
}
