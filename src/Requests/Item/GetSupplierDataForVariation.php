<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get supplier data for a variation
 *
 * Gets the data for a supplier linked to a variation. The ID of the variation and the ID of the link
 * between the variation and the supplier must be specified.
 */
class GetSupplierDataForVariation extends Request
{
	protected Method $method = Method::GET;


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
