<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Generate a document of an "stockIntake".
 *
 * Generates a receipt that contains a least information about a stockIntake.
 * Therefore at least the
 * "receiptId" must be specified.
 */
class GenerateDocumentOfStockIntake extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/documents/incoming_items_receipt/generate";
	}


	public function __construct()
	{
	}
}
