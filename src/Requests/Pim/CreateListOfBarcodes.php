<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a list of barcodes
 *
 * Creates a list of new barcodes.
 */
class CreateListOfBarcodes extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/barcodes";
	}


	public function __construct()
	{
	}
}
