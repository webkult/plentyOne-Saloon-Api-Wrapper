<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List bundle components
 *
 * List all components of a bundle.
 * The ID of the item and the ID of the variation to which bundle
 * components were added must be specified.
 */
class ListBundleComponents extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/variation_bundles";
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
