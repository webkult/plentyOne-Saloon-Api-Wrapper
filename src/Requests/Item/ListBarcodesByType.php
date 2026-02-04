<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List barcodes by type
 *
 * Lists all barcodes of a specific type. The type must be specified.
 */
class ListBarcodesByType extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/barcodes/type/{$this->type}";
	}


	/**
	 * @param int $type
	 */
	public function __construct(
		protected int $type,
	) {
	}
}
