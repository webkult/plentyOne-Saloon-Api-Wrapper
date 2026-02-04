<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a barcode
 *
 * Deletes a barcode. The ID of the barcode must be specified.
 */
class DeleteBarcode extends Request
{
	protected Method $method = Method::DELETE;


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
