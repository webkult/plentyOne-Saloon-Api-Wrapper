<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get barcode duplicates
 *
 * Gets one duplicated barcode. The ID must be specified.
 */
class GetBarcodeDuplicates extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/barcodes/duplicates/count";
	}


	public function __construct()
	{
	}
}
