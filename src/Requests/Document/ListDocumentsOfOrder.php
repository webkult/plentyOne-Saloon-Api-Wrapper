<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List documents of an order
 *
 * Lists documents of an order. The ID of the order must be specified. In addition a type can be
 * specified.
 */
class ListDocumentsOfOrder extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/{$this->orderId}/documents/{$this->type}";
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $type The type of the order document. The available types are receipt, zReport, tillCount, posCouponReceipt, posInvoice, posInvoiceCancellation, cancellation, invoiceExternal, invoice, deliveryNote, poDeliveryNote, creditNote, creditNoteExternal, orderConfirmation, offer, dunningLetter, reversalDunningLetter, returnNote, successConfirmation, correction, reorder, uploaded.
	 * @param null|string $createdAtFrom Filter that restricts the search result to documents that were created on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $createdAtTo Filter that restricts the search result to documents that were created within a certain period of time. This filter can be used alone or can be combined with the CreatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $updatedAtFrom Filter that restricts the search result to documents that were updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $updatedAtTo Filter that restricts the search result to documents that were updated within a certain period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $displayDateFrom Filter that restricts the search result to documents that were displayed on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $displayDateTo Filter that restricts the search result to documents that were displayed within a certain period of time. This filter can be used alone or can be combined with the displayDateFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|array $with Load additional relations for a document. Currently possible are:
	 *     <ul>
	 *     <li>'references' = The document reference objects that are associated with the document.</li>
	 *     </ul>
	 *     Example: <code>?with[]=references</code>
	 * @param null|bool $withContent Load also the document content as base64 encoded string.
	 */
	public function __construct(
		protected int $orderId,
		protected string $type,
		protected ?string $createdAtFrom = null,
		protected ?string $createdAtTo = null,
		protected ?string $updatedAtFrom = null,
		protected ?string $updatedAtTo = null,
		protected ?string $displayDateFrom = null,
		protected ?string $displayDateTo = null,
		protected ?array $with = null,
		protected ?bool $withContent = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'createdAtFrom' => $this->createdAtFrom,
			'createdAtTo' => $this->createdAtTo,
			'updatedAtFrom' => $this->updatedAtFrom,
			'updatedAtTo' => $this->updatedAtTo,
			'displayDateFrom' => $this->displayDateFrom,
			'displayDateTo' => $this->displayDateTo,
			'with' => $this->with,
			'withContent' => $this->withContent,
		]);
	}
}
