<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Generates a preview of the "incoming items receipt".
 *
 * Currently only supports generating the document as html.
 */
class GeneratesPreviewOfTheIncomingItemsReceipt extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/documents/incoming_items_receipt/generate/preview";
	}


	public function __construct()
	{
	}
}
