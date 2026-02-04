<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a variation barcode
 *
 * Updates a variation barcode. The ID of the item, the ID of the variation, the ID of the barcode and
 * the code must be specified.
 */
class UpdateVariationBarcode extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/variation_barcodes/{$this->barcodeId}";
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $barcodeId
	 */
	public function __construct(
		protected int $id,
		protected int $variationId,
		protected int $barcodeId,
	) {
	}
}
