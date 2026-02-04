<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a barcode
 *
 * Updates a barcode. The ID of the barcode must be specified.
 */
class UpdateBarcode extends Request
{
	protected Method $method = Method::PUT;


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
