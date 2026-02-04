<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all barcode duplicates
 *
 * Gets all duplicated barcodes.
 */
class GetAllBarcodeDuplicates extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/barcodes/duplicates";
	}


	public function __construct()
	{
	}
}
