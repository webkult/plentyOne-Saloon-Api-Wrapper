<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a single entity from a specified source.
 *
 * Get a single entity from a specified source.
 */
class GetSingleEntityFromSpecifiedSource extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/shop_builder/search/{$this->source}/{$this->id}";
	}


	/**
	 * @param string $source The source to get the entry for.
	 * @param int $id
	 */
	public function __construct(
		protected string $source,
		protected int $id,
	) {
	}
}
