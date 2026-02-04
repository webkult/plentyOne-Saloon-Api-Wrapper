<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create new content.
 *
 * Creates a new ShopBuilder content.
 */
class CreateNewContent extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/shop_builder/contents";
	}


	/**
	 * @param null|string $frontendLang Language to be used when rendering frontend widgets.
	 */
	public function __construct(
		protected ?string $frontendLang = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['frontendLang' => $this->frontendLang]);
	}
}
