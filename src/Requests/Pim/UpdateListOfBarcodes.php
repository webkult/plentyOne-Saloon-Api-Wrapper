<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a list of barcodes
 *
 * Updates a list of barcodes.
 */
class UpdateListOfBarcodes extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/barcodes";
	}


	public function __construct()
	{
	}
}
