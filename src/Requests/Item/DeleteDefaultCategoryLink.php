<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a default category link
 *
 * Deletes a link between a variation and a category that designates this category as the default
 * category.
 */
class DeleteDefaultCategoryLink extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/variation_default_categories/{$this->plentyId}";
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $plentyId
	 */
	public function __construct(
		protected int $id,
		protected int $variationId,
		protected int $plentyId,
	) {
	}
}
