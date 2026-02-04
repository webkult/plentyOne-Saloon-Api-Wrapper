<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Remove a bundle component
 *
 * Removes a component from a bundle. The bundle ID must be specified.
 */
class RemoveBundleComponent extends Request
{
	protected Method $method = Method::DELETE;


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
