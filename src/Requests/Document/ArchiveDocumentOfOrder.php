<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Archive document of an order
 *
 * Archives a document of an order. The ID of the order and the ID of the document must be specified.
 */
class ArchiveDocumentOfOrder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/documents/{$this->documentId}/archive";
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
