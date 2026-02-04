<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a variation barcode
 *
 * Deletes a variation barcode. Unlinks the barcode from the variation and deletes the code saved for
 * the variation.
 */
class DeleteVariationBarcode extends Request
{
	protected Method $method = Method::DELETE;


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
