<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Link a content to a layout container.
 *
 * Link a content to a layout container of a frontend plugin.
 */
class LinkContentToLayoutContainer extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/shop_builder/content_links";
	}


	public function __construct()
	{
	}
}
