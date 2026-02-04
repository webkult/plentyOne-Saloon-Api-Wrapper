<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Upload order documents
 *
 * Uploads order documents. The ID of the order and the document type must be specified.
 */
class UploadOrderDocuments extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/documents/{$this->type}";
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $type The document type. Supported types are 'invoiceExternal', 'deliveryNote', 'poDeliveryNote', 'orderConfirmation', 'offer', 'dunningLetter', 'reversalDunningLetter', 'returnNote', 'successConfirmation', 'correction', 'creditNoteExternal', 'reorder', 'uploaded'.
	 */
	public function __construct(
		protected int $orderId,
		protected string $type,
	) {
	}
}
