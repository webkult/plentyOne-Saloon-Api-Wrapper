<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete document of an order
 *
 * Deletes document of an order. The ID of the order and the ID of the document must be specified.
 */
class DeleteDocumentOfOrder extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/documents/{$this->documentId}";
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param int $documentId The ID of the document
	 */
	public function __construct(
		protected int $orderId,
		protected int $documentId,
	) {
	}
}
