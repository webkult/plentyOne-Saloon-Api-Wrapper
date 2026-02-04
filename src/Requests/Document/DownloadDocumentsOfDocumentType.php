<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Download documents of a document type
 *
 * Downloads documents of the same document type as a zip file. The type of the documents must be
 * specified.
 */
class DownloadDocumentsOfDocumentType extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/documents/downloads/{$this->type}";
	}


	/**
	 * @param string $type The type of the order document. The available types are receipt, zReport, tillCount, posCouponReceipt, posInvoice, posInvoiceCancellation, cancellation, invoiceExternal, invoice, deliveryNote, creditNote, creditNoteExternal, orderConfirmation, offer, dunningLetter, reversalDunningLetter, returnNote, successConfirmation, correction, reorder, uploaded.
	 * @param null|int $contactId Filter that restricts the search results to documents belonging to a specific contact ID.
	 * @param null|int $plentyId Filter that restricts the search results to documents belonging to the specific plenty ID.
	 * @param null|string $createdAtFrom Filter that restricts the search result to documents that were created on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $createdAtTo Filter that restricts the search result to documents that were created within a certain period of time. This filter can be used alone or can be combined with the CreatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $updatedAtFrom Filter that restricts the search result to documents that were updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $updatedAtTo Filter that restricts the search result to documents that were updated within a certain period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $displayDateFrom Filter that restricts the search result to documents that were displayed on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $displayDateTo Filter that restricts the search result to documents that were displayed within a certain period of time. This filter can be used alone or can be combined with the displayDateFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param int $page The page of results to search for
	 * @param int $itemsPerPage The number of documents to display per page. The default number displayed is 50. The maximum number is 6000.
	 */
	public function __construct(
		protected string $type,
		protected ?int $contactId = null,
		protected ?int $plentyId = null,
		protected ?string $createdAtFrom = null,
		protected ?string $createdAtTo = null,
		protected ?string $updatedAtFrom = null,
		protected ?string $updatedAtTo = null,
		protected ?string $displayDateFrom = null,
		protected ?string $displayDateTo = null,
		protected int $page,
		protected int $itemsPerPage,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'contactId' => $this->contactId,
			'plentyId' => $this->plentyId,
			'createdAtFrom' => $this->createdAtFrom,
			'createdAtTo' => $this->createdAtTo,
			'updatedAtFrom' => $this->updatedAtFrom,
			'updatedAtTo' => $this->updatedAtTo,
			'displayDateFrom' => $this->displayDateFrom,
			'displayDateTo' => $this->displayDateTo,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
		]);
	}
}
