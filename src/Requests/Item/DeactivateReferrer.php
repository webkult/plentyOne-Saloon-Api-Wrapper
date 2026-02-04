<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Deactivate a referrer
 *
 * Deactivate a referrer for a barcode. The ID of the barcode and the ID of the referrer must be
 * specified.
 */
class DeactivateReferrer extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/barcodes/{$this->barcodeId}/referrer/{$this->referrerId}";
	}


	/**
	 * @param int $barcodeId
	 * @param int $referrerId
	 */
	public function __construct(
		protected int $barcodeId,
		protected int $referrerId,
	) {
	}
}
