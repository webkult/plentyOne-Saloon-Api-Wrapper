<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a variation barcode
 *
 * Get a specific variation barcode. The ID of the item, the ID of the variation and the ID of the
 * barcode must be specified.
 */
class GetVariationBarcode extends Request
{
	protected Method $method = Method::GET;


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
