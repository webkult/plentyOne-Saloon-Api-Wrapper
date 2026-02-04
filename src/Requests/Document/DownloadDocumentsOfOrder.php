<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Download documents of an order
 *
 * Downloads documents of an order as a zip file. The ID of the order must be specified. In addition a
 * type can be specified.
 */
class DownloadDocumentsOfOrder extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/documents/downloads/{$this->type}";
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $type The type of the document. The types available are receipt, zReport, tillCount, posCouponReceipt, cancellation, posInvoice, posInvoiceCancellation, invoiceExternal, invoice, deliveryNote, poDeliveryNote, creditNote, creditNoreExternal, orderConfirmation, offer, dunningLetter, reversalDunningLetter, returnNote, successConfirmation, reorder, correction and uploaded.
	 */
	public function __construct(
		protected int $orderId,
		protected string $type,
	) {
	}
}
