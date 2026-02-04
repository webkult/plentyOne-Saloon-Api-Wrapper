<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a variation bundle
 *
 * Gets the bundle information for a specific bundle component.
 */
class GetVariationBundle extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/variation_bundles/{$this->bundleId}";
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $bundleId
	 */
	public function __construct(
		protected int $id,
		protected int $variationId,
		protected int $bundleId,
	) {
	}
}
