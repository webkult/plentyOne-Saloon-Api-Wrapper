<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a barcode
 *
 * Gets a barcode. The ID of the barcode must be specified.
 */
class GetBarcode extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/barcodes/{$this->barcodeId}";
	}


	/**
	 * @param int $barcodeId
	 */
	public function __construct(
		protected int $barcodeId,
	) {
	}
}
