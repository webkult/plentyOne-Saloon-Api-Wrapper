<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all widgets
 *
 * List all widgets provided by all frontend plugins of a given plugin set.
 */
class ListAllWidgets extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/shop_builder/widgets";
	}


	/**
	 * @param null|string $identifier Filter results by widget identifier.
	 * @param null|string $contentType Filter results that are allowed for the given content type.
	 */
	public function __construct(
		protected ?string $identifier = null,
		protected ?string $contentType = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['identifier' => $this->identifier, 'contentType' => $this->contentType]);
	}
}
