<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete variation barcodes
 *
 * Deletes a list of variation barcodes.
 */
class DeleteVariationBarcodes extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/barcodes";
	}


	public function __construct()
	{
	}
}
