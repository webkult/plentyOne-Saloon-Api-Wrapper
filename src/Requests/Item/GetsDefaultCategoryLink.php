<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Gets a default category link
 *
 * Gets the default category linked to a variation for the specified client (store). The ID of the
 * item, the ID of the variation and the ID of the client (store) must be specified.
 */
class GetsDefaultCategoryLink extends Request
{
	protected Method $method = Method::GET;


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
