<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Updates supplier data for a variation
 *
 * Updates the data of a supplier linked to a variation.
 */
class UpdatesSupplierDataForVariation extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/variation_suppliers/{$this->variationSupplierId}";
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $variationSupplierId
	 */
	public function __construct(
		protected int $id,
		protected int $variationId,
		protected int $variationSupplierId,
	) {
	}
}
