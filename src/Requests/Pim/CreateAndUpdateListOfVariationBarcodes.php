<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Create and update a list of variation barcodes
 *
 * Creates and updates a list of variation barcodes.
 */
class CreateAndUpdateListOfVariationBarcodes extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/barcodes";
	}


	public function __construct()
	{
	}
}
