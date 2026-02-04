<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List bundles
 *
 * List the bundles that the variation is a component of. The variation ID must be specified.
 */
class ListBundles extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/variation_component_bundles";
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 */
	public function __construct(
		protected int $id,
		protected int $variationId,
	) {
	}
}
