<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a list of barcodes
 *
 * Deletes a list of barcodes.
 */
class DeleteListOfBarcodes extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/barcodes";
	}


	public function __construct()
	{
	}
}
