<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List barcodes by referrer
 *
 * Lists barcodes linked to the specified referrer. The ID of the referrer must be specified.
 */
class ListBarcodesByReferrer extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/barcodes/referrer/{$this->referrerId}";
	}


	/**
	 * @param int $referrerId
	 */
	public function __construct(
		protected int $referrerId,
	) {
	}
}
