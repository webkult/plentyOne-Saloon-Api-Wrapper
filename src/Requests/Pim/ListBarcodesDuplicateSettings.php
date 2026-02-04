<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List barcodes duplicate settings
 *
 * List barcode duplicate settings. Duplicate barcode 1 = warning 2 = error
 */
class ListBarcodesDuplicateSettings extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/barcodes/duplicates/settings";
	}


	public function __construct()
	{
	}
}
