<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get link between category and variation
 *
 * Gets the link between a category and a variation.
 */
class GetLinkBetweenCategoryAndVariation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/variation_categories/{$this->catId}";
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $catId
	 */
	public function __construct(
		protected int $id,
		protected int $variationId,
		protected int $catId,
	) {
	}
}
