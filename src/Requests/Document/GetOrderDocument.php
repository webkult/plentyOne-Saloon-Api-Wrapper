<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get an order document.
 *
 * Gets an order document. The document id must be specified.
 */
class GetOrderDocument extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/documents/{$this->documentId}";
	}


	/**
	 * @param int $documentId
	 */
	public function __construct(
		protected int $documentId,
	) {
	}
}
