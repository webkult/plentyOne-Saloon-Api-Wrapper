<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get most recent document of an order
 *
 * Get most recent document of an order. The ID of the order must be specified.
 */
class GetMostRecentDocumentOfOrder extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/documents/{$this->type}/recent";
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $type The type of the order document. The available types are receipt, invoiceExternal, invoice, deliveryNote, poDeliveryNote, creditNote, creditNoteExternal, orderConfirmation, offer, dunningLetter, reversalDunningLetter, returnNote, successConfirmation, correction, reversal, reversalRefund, .
	 * @param null|bool $withContent Load also the document content as base64 encoded string.
	 */
	public function __construct(
		protected int $orderId,
		protected string $type,
		protected ?bool $withContent = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['withContent' => $this->withContent]);
	}
}
