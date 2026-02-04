<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Document\ArchiveDocumentOfOrder;
use PlentyOne\Api\Requests\Document\DeleteCategoryDocument;
use PlentyOne\Api\Requests\Document\DeleteDocumentOfOrder;
use PlentyOne\Api\Requests\Document\DownloadCategoryDocuments;
use PlentyOne\Api\Requests\Document\DownloadDocuments;
use PlentyOne\Api\Requests\Document\DownloadDocumentsOfDocumentType;
use PlentyOne\Api\Requests\Document\DownloadDocumentsOfOrder;
use PlentyOne\Api\Requests\Document\DownloadTheContentOfDocument;
use PlentyOne\Api\Requests\Document\DownloadTheContentOfPreviewDocument;
use PlentyOne\Api\Requests\Document\GenerateAdjustmentFormOfOrder;
use PlentyOne\Api\Requests\Document\GenerateCreditNoteOfOrder;
use PlentyOne\Api\Requests\Document\GenerateDeliveryNoteOfOrder;
use PlentyOne\Api\Requests\Document\GenerateDocumentOfOrder;
use PlentyOne\Api\Requests\Document\GenerateDocumentOfStockIntake;
use PlentyOne\Api\Requests\Document\GenerateDunningLetterOfOrder;
use PlentyOne\Api\Requests\Document\GenerateDunningLetterReversalDocumentOfOrder;
use PlentyOne\Api\Requests\Document\GenerateInvoiceOfOrder;
use PlentyOne\Api\Requests\Document\GenerateMultiCreditNoteOfOrder;
use PlentyOne\Api\Requests\Document\GenerateMultiInvoiceOfOrder;
use PlentyOne\Api\Requests\Document\GenerateOfferDocumentOfOrder;
use PlentyOne\Api\Requests\Document\GenerateOrderConfirmationOfOrder;
use PlentyOne\Api\Requests\Document\GenerateOrderCustomDocumentOfOrder;
use PlentyOne\Api\Requests\Document\GeneratePickUpDeliveryNoteOfOrder;
use PlentyOne\Api\Requests\Document\GeneratePreviewOfDocument;
use PlentyOne\Api\Requests\Document\GenerateProFormaInvoiceOfOrder;
use PlentyOne\Api\Requests\Document\GeneratePurchaseOrderPoDeliveryNoteOfOrder;
use PlentyOne\Api\Requests\Document\GenerateRefundReversalDocumentOfOrder;
use PlentyOne\Api\Requests\Document\GenerateReorderDocumentOfOrder;
use PlentyOne\Api\Requests\Document\GenerateRepairSlipOfOrder;
use PlentyOne\Api\Requests\Document\GenerateReturnSlipOfOrder;
use PlentyOne\Api\Requests\Document\GenerateReversalDocumentOfOrder;
use PlentyOne\Api\Requests\Document\GenerateSuccessConfirmationOfOrder;
use PlentyOne\Api\Requests\Document\GeneratesPreviewOfTheIncomingItemsReceipt;
use PlentyOne\Api\Requests\Document\GetCurrentInvoiceOrCreditNoteOfOrder;
use PlentyOne\Api\Requests\Document\GetMostRecentDocumentOfOrder;
use PlentyOne\Api\Requests\Document\GetOrderDocument;
use PlentyOne\Api\Requests\Document\GetStatusOfDocument;
use PlentyOne\Api\Requests\Document\ListDocuments;
use PlentyOne\Api\Requests\Document\ListDocumentsOfCategory;
use PlentyOne\Api\Requests\Document\ListDocumentsOfOrder;
use PlentyOne\Api\Requests\Document\ListDocumentsOfType;
use PlentyOne\Api\Requests\Document\ListOrderDocuments;
use PlentyOne\Api\Requests\Document\UploadCategoryDocuments;
use PlentyOne\Api\Requests\Document\UploadOrderDocuments;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Document extends BaseResource
{
	/**
	 * @param int $categoryId The ID of the category
	 */
	public function listDocumentsOfCategory(int $categoryId): Response
	{
		return $this->connector->send(new ListDocumentsOfCategory($categoryId));
	}


	/**
	 * @param int $categoryId The ID of the category
	 * @param array $documents The array with the category documents
	 * @param int $number The document number
	 * @param string $numberWithPrefix Number with prefix
	 * @param int $directoryId  The directory ID
	 * @param string $displayDate  The date displayed on the document
	 */
	public function uploadCategoryDocuments(
		int $categoryId,
		array $documents,
		?int $number = null,
		?string $numberWithPrefix = null,
		?int $directoryId = null,
		?string $displayDate = null,
	): Response
	{
		return $this->connector->send(new UploadCategoryDocuments($categoryId, $documents, $number, $numberWithPrefix, $directoryId, $displayDate));
	}


	/**
	 * @param int $categoryId The ID of the category
	 */
	public function downloadCategoryDocuments(int $categoryId): Response
	{
		return $this->connector->send(new DownloadCategoryDocuments($categoryId));
	}


	/**
	 * @param int $categoryId
	 * @param int $documentId
	 */
	public function deleteCategoryDocument(int $categoryId, int $documentId): Response
	{
		return $this->connector->send(new DeleteCategoryDocument($categoryId, $documentId));
	}


	public function generateDocumentOfStockIntake(): Response
	{
		return $this->connector->send(new GenerateDocumentOfStockIntake());
	}


	public function generatesPreviewOfTheIncomingItemsReceipt(): Response
	{
		return $this->connector->send(new GeneratesPreviewOfTheIncomingItemsReceipt());
	}


	/**
	 * @param int $previewType
	 */
	public function generatePreviewOfDocument(int $previewType): Response
	{
		return $this->connector->send(new GeneratePreviewOfDocument($previewType));
	}


	/**
	 * @param int $documentHash
	 */
	public function downloadTheContentOfPreviewDocument(int $documentHash): Response
	{
		return $this->connector->send(new DownloadTheContentOfPreviewDocument($documentHash));
	}


	/**
	 * @param int $documentId The ID of the document
	 */
	public function downloadTheContentOfDocument(int $documentId): Response
	{
		return $this->connector->send(new DownloadTheContentOfDocument($documentId));
	}


	/**
	 * @param int $documentId
	 */
	public function getStatusOfDocument(int $documentId): Response
	{
		return $this->connector->send(new GetStatusOfDocument($documentId));
	}


	/**
	 * @param int $contactId Filter that restricts the search results to documents belonging to a specific contact ID.
	 * @param int $plentyId Filter that restricts the search results to documents belonging to the specific plenty ID.
	 * @param string $createdAtFrom Filter that restricts the search result to documents that were created on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $createdAtTo Filter that restricts the search result to documents that were created within a certain period of time. This filter can be used alone or can be combined with the CreatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $displayDateFrom Filter that restricts the search result to documents that were displayed on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $displayDateTo Filter that restricts the search result to documents that were displayed within a certain period of time. This filter can be used alone or can be combined with the displayDateFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param int $page The page of results to search for
	 * @param int $itemsPerPage The items per page to search for
	 * @param array $with Load additional relations for a document. Currently possible are:
	 *     <ul>
	 *     <li>'references' = The document reference objects that are associated with the document.</li>
	 *     </ul>
	 *     Example: <code>?with[]=references</code>
	 */
	public function listOrderDocuments(
		?int $contactId = null,
		?int $plentyId = null,
		?string $createdAtFrom = null,
		?string $createdAtTo = null,
		?string $displayDateFrom = null,
		?string $displayDateTo = null,
		int $page,
		int $itemsPerPage,
		?array $with = null,
	): Response
	{
		return $this->connector->send(new ListOrderDocuments($contactId, $plentyId, $createdAtFrom, $createdAtTo, $displayDateFrom, $displayDateTo, $page, $itemsPerPage, $with));
	}


	/**
	 * @param array $ids The document ids to be downloaded
	 * @param string $filename The filename to be used for the zip file
	 */
	public function downloadDocuments(array $ids, ?string $filename = null): Response
	{
		return $this->connector->send(new DownloadDocuments($ids, $filename));
	}


	/**
	 * @param string $type The type of the order document. The available types are receipt, zReport, tillCount, posCouponReceipt, posInvoice, posInvoiceCancellation, cancellation, invoiceExternal, invoice, deliveryNote, creditNote, creditNoteExternal, orderConfirmation, offer, dunningLetter, reversalDunningLetter, returnNote, successConfirmation, correction, reorder, uploaded.
	 * @param int $contactId Filter that restricts the search results to documents belonging to a specific contact ID.
	 * @param int $plentyId Filter that restricts the search results to documents belonging to the specific plenty ID.
	 * @param string $createdAtFrom Filter that restricts the search result to documents that were created on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $createdAtTo Filter that restricts the search result to documents that were created within a certain period of time. This filter can be used alone or can be combined with the CreatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $updatedAtFrom Filter that restricts the search result to documents that were updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $updatedAtTo Filter that restricts the search result to documents that were updated within a certain period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $displayDateFrom Filter that restricts the search result to documents that were displayed on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $displayDateTo Filter that restricts the search result to documents that were displayed within a certain period of time. This filter can be used alone or can be combined with the displayDateFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param int $page The page of results to search for
	 * @param int $itemsPerPage The number of documents to display per page. The default number displayed is 50. The maximum number is 6000.
	 */
	public function downloadDocumentsOfDocumentType(
		string $type,
		?int $contactId = null,
		?int $plentyId = null,
		?string $createdAtFrom = null,
		?string $createdAtTo = null,
		?string $updatedAtFrom = null,
		?string $updatedAtTo = null,
		?string $displayDateFrom = null,
		?string $displayDateTo = null,
		int $page,
		int $itemsPerPage,
	): Response
	{
		return $this->connector->send(new DownloadDocumentsOfDocumentType($type, $contactId, $plentyId, $createdAtFrom, $createdAtTo, $updatedAtFrom, $updatedAtTo, $displayDateFrom, $displayDateTo, $page, $itemsPerPage));
	}


	/**
	 * @param int $contactId Filter that restricts the search results to documents belonging to a specific contact ID.
	 * @param int $plentyId Filter that restricts the search results to documents belonging to the specific plenty ID.
	 * @param string $createdAtFrom Filter that restricts the search result to documents that were created on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $createdAtTo Filter that restricts the search result to documents that were created within a certain period of time. This filter can be used alone or can be combined with the CreatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $updatedAtFrom Filter that restricts the search result to documents that were updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $updatedAtTo Filter that restricts the search result to documents that were updated within a certain period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $displayDateFrom Filter that restricts the search result to documents that were displayed on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $displayDateTo Filter that restricts the search result to documents that were displayed within a certain period of time. This filter can be used alone or can be combined with the displayDateFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param int $orderId The ID of the order
	 * @param string $type The type of the order document. The available types are receipt, invoiceExternal, invoice, deliveryNote, poDeliveryNote, creditNote, creditNoteExternal, orderConfirmation, offer, dunningLetter, reversalDunningLetter, returnNote, successConfirmation, correction, uploaded.
	 * @param int $page The page to get. The default page that will be returned is page 1.
	 * @param int $itemsPerPage The number of documents to list per page. The default number of documents per page is 50. The maximum number is 6000.
	 */
	public function listDocuments(
		?int $contactId = null,
		?int $plentyId = null,
		?string $createdAtFrom = null,
		?string $createdAtTo = null,
		?string $updatedAtFrom = null,
		?string $updatedAtTo = null,
		?string $displayDateFrom = null,
		?string $displayDateTo = null,
		?int $orderId = null,
		?string $type = null,
		int $page,
		int $itemsPerPage,
	): Response
	{
		return $this->connector->send(new ListDocuments($contactId, $plentyId, $createdAtFrom, $createdAtTo, $updatedAtFrom, $updatedAtTo, $displayDateFrom, $displayDateTo, $orderId, $type, $page, $itemsPerPage));
	}


	/**
	 * @param int $documentId
	 */
	public function getOrderDocument(int $documentId): Response
	{
		return $this->connector->send(new GetOrderDocument($documentId));
	}


	/**
	 * @param string $type The type of the order document. The available types are receipt, tillCount, posCouponReceipt, posInvoice, posInvoiceCancellation, cancellation, zReport, invoiceExternal, invoice, deliveryNote, poDeliveryNote, creditNote, creditNoteExternal, orderConfirmation, offer, dunningLetter, reversalDunningLetter, returnNote, successConfirmation, correction, reversal, reversalRefund, proFormaInvoice, reorder, uploaded.
	 * @param int $contactId Filter that restricts the search results to documents belonging to a specific contact ID.
	 * @param int $plentyId Filter that restricts the search results to documents belonging to the specific plenty ID.
	 * @param string $createdAtFrom Filter that restricts the search result to documents that were created on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $createdAtTo Filter that restricts the search result to documents that were created within a certain period of time. This filter can be used alone or can be combined with the CreatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $updatedAtFrom Filter that restricts the search result to documents that were updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $updatedAtTo Filter that restricts the search result to documents that were updated within a certain period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $displayDateFrom Filter that restricts the search result to documents that were displayed on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $displayDateTo Filter that restricts the search result to documents that were displayed within a certain period of time. This filter can be used alone or can be combined with the displayDateFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param int $page The page of results to search for
	 * @param int $itemsPerPage The items per page to search for
	 * @param array $with Load additional relations for a document. Currently possible are:
	 *     <ul>
	 *     <li>'references' = The document reference objects that are associated with the document.</li>
	 *     </ul>
	 *     Example: <code>?with[]=references</code>
	 */
	public function listDocumentsOfType(
		string $type,
		?int $contactId = null,
		?int $plentyId = null,
		?string $createdAtFrom = null,
		?string $createdAtTo = null,
		?string $updatedAtFrom = null,
		?string $updatedAtTo = null,
		?string $displayDateFrom = null,
		?string $displayDateTo = null,
		int $page,
		int $itemsPerPage,
		?array $with = null,
	): Response
	{
		return $this->connector->send(new ListDocumentsOfType($type, $contactId, $plentyId, $createdAtFrom, $createdAtTo, $updatedAtFrom, $updatedAtTo, $displayDateFrom, $displayDateTo, $page, $itemsPerPage, $with));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $documentDate If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
	 * @param string $comment Comment that appears below the stock units.
	 */
	public function generateAdjustmentFormOfOrder(
		int $orderId,
		?string $documentDate = null,
		?string $comment = null,
	): Response
	{
		return $this->connector->send(new GenerateAdjustmentFormOfOrder($orderId, $documentDate, $comment));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $documentDate If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'
	 * @param bool $allowRegenerate Deprecated. This parameter has no effect anymore.
	 * @param string $comment Comment that appears below the stock units.
	 */
	public function generateCreditNoteOfOrder(
		int $orderId,
		?string $documentDate = null,
		?bool $allowRegenerate = null,
		?string $comment = null,
	): Response
	{
		return $this->connector->send(new GenerateCreditNoteOfOrder($orderId, $documentDate, $allowRegenerate, $comment));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $documentDate If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
	 * @param string $comment Comment that appears below the stock units.
	 * @param int $storehouseId If set, only items with the given warehouse ID are included on the document.
	 */
	public function generateDeliveryNoteOfOrder(
		int $orderId,
		?string $documentDate = null,
		?string $comment = null,
		?int $storehouseId = null,
	): Response
	{
		return $this->connector->send(new GenerateDeliveryNoteOfOrder($orderId, $documentDate, $comment, $storehouseId));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $type The type of the document. The types available are receipt, zReport, tillCount, posCouponReceipt, cancellation, posInvoice, posInvoiceCancellation, invoiceExternal, invoice, deliveryNote, poDeliveryNote, creditNote, creditNoreExternal, orderConfirmation, offer, dunningLetter, reversalDunningLetter, returnNote, successConfirmation, reorder, correction and uploaded.
	 */
	public function downloadDocumentsOfOrder(int $orderId, string $type): Response
	{
		return $this->connector->send(new DownloadDocumentsOfOrder($orderId, $type));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $documentDate If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
	 * @param string $comment Comment that appears below the stock units.
	 * @param int $articleId Add an item to the order.
	 * @param int $variationId Add a variation to the order.
	 */
	public function generateDunningLetterOfOrder(
		int $orderId,
		?string $documentDate = null,
		?string $comment = null,
		?int $articleId = null,
		?int $variationId = null,
	): Response
	{
		return $this->connector->send(new GenerateDunningLetterOfOrder($orderId, $documentDate, $comment, $articleId, $variationId));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $documentDate If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
	 * @param bool $allowRegenerate Deprecated. This parameter has no effect anymore.
	 * @param string $comment Comment that appears below the stock units.
	 * @param bool $valuta Deprecated. This parameter has no effect anymore.
	 * @param bool $discount Deprecated. This parameter has no effect anymore.
	 * @param int $discountPercentage Deprecated. This parameter has no effect anymore.
	 * @param int $discountDays Deprecated. This parameter has no effect anymore.
	 * @param bool $paymentDue Deprecated. This parameter has no effect anymore.
	 * @param int $paymentDueDays Deprecated. This parameter has no effect anymore.
	 */
	public function generateInvoiceOfOrder(
		int $orderId,
		?string $documentDate = null,
		?bool $allowRegenerate = null,
		?string $comment = null,
		?bool $valuta = null,
		?bool $discount = null,
		?int $discountPercentage = null,
		?int $discountDays = null,
		?bool $paymentDue = null,
		?int $paymentDueDays = null,
	): Response
	{
		return $this->connector->send(new GenerateInvoiceOfOrder($orderId, $documentDate, $allowRegenerate, $comment, $valuta, $discount, $discountPercentage, $discountDays, $paymentDue, $paymentDueDays));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $documentDate If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
	 * @param string $comment Comment that appears below the stock units.
	 */
	public function generateMultiCreditNoteOfOrder(
		int $orderId,
		?string $documentDate = null,
		?string $comment = null,
	): Response
	{
		return $this->connector->send(new GenerateMultiCreditNoteOfOrder($orderId, $documentDate, $comment));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $documentDate If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
	 * @param string $comment Comment that appears below the stock units.
	 */
	public function generateMultiInvoiceOfOrder(
		int $orderId,
		?string $documentDate = null,
		?string $comment = null,
	): Response
	{
		return $this->connector->send(new GenerateMultiInvoiceOfOrder($orderId, $documentDate, $comment));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $documentDate If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
	 * @param string $comment Comment that appears below the stock units.
	 */
	public function generateOfferDocumentOfOrder(
		int $orderId,
		?string $documentDate = null,
		?string $comment = null,
	): Response
	{
		return $this->connector->send(new GenerateOfferDocumentOfOrder($orderId, $documentDate, $comment));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $documentDate If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
	 * @param string $comment Comment that appears below the stock units.
	 * @param bool $valuta Deprecated. This parameter has no effect anymore.
	 * @param bool $discount Deprecated. This parameter has no effect anymore.
	 * @param int $discountPercentage Deprecated. This parameter has no effect anymore.
	 * @param int $discountDays Deprecated. This parameter has no effect anymore.
	 * @param bool $paymentDue Deprecated. This parameter has no effect anymore.
	 * @param int $paymentDueDays Deprecated. This parameter has no effect anymore.
	 */
	public function generateOrderConfirmationOfOrder(
		int $orderId,
		?string $documentDate = null,
		?string $comment = null,
		?bool $valuta = null,
		?bool $discount = null,
		?int $discountPercentage = null,
		?int $discountDays = null,
		?bool $paymentDue = null,
		?int $paymentDueDays = null,
	): Response
	{
		return $this->connector->send(new GenerateOrderConfirmationOfOrder($orderId, $documentDate, $comment, $valuta, $discount, $discountPercentage, $discountDays, $paymentDue, $paymentDueDays));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $documentDate If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
	 * @param string $comment Comment that appears below the stock units.
	 */
	public function generateOrderCustomDocumentOfOrder(
		int $orderId,
		?string $documentDate = null,
		?string $comment = null,
	): Response
	{
		return $this->connector->send(new GenerateOrderCustomDocumentOfOrder($orderId, $documentDate, $comment));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $documentDate If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
	 * @param string $comment Comment that appears below the stock units.
	 */
	public function generatePickUpDeliveryNoteOfOrder(
		int $orderId,
		?string $documentDate = null,
		?string $comment = null,
	): Response
	{
		return $this->connector->send(new GeneratePickUpDeliveryNoteOfOrder($orderId, $documentDate, $comment));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $documentDate If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
	 */
	public function generatePurchaseOrderPoDeliveryNoteOfOrder(int $orderId, ?string $documentDate = null): Response
	{
		return $this->connector->send(new GeneratePurchaseOrderPoDeliveryNoteOfOrder($orderId, $documentDate));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $documentDate If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
	 * @param string $comment Comment that appears below the stock units.
	 * @param bool $valuta Deprecated. This parameter has no effect anymore.
	 * @param bool $discount Deprecated. This parameter has no effect anymore.
	 * @param int $discountPercentage Deprecated. This parameter has no effect anymore.
	 * @param int $discountDays Deprecated. This parameter has no effect anymore.
	 * @param bool $paymentDue Deprecated. This parameter has no effect anymore.
	 * @param int $paymentDueDays Deprecated. This parameter has no effect anymore.
	 */
	public function generateProFormaInvoiceOfOrder(
		int $orderId,
		?string $documentDate = null,
		?string $comment = null,
		?bool $valuta = null,
		?bool $discount = null,
		?int $discountPercentage = null,
		?int $discountDays = null,
		?bool $paymentDue = null,
		?int $paymentDueDays = null,
	): Response
	{
		return $this->connector->send(new GenerateProFormaInvoiceOfOrder($orderId, $documentDate, $comment, $valuta, $discount, $discountPercentage, $discountDays, $paymentDue, $paymentDueDays));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param bool $allowRegenerate If true, existing reorder document is generated once again.
	 * @param string $comment Comment that appears below the stock units.
	 */
	public function generateReorderDocumentOfOrder(
		int $orderId,
		?bool $allowRegenerate = null,
		?string $comment = null,
	): Response
	{
		return $this->connector->send(new GenerateReorderDocumentOfOrder($orderId, $allowRegenerate, $comment));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $documentDate If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
	 * @param string $comment Comment that appears below the stock units.
	 */
	public function generateRepairSlipOfOrder(
		int $orderId,
		?string $documentDate = null,
		?string $comment = null,
	): Response
	{
		return $this->connector->send(new GenerateRepairSlipOfOrder($orderId, $documentDate, $comment));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $documentDate If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
	 * @param string $comment Comment that appears below the stock units.
	 */
	public function generateReturnSlipOfOrder(
		int $orderId,
		?string $documentDate = null,
		?string $comment = null,
	): Response
	{
		return $this->connector->send(new GenerateReturnSlipOfOrder($orderId, $documentDate, $comment));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $documentDate If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
	 * @param string $comment Comment that appears below the stock units.
	 */
	public function generateReversalDocumentOfOrder(
		int $orderId,
		?string $documentDate = null,
		?string $comment = null,
	): Response
	{
		return $this->connector->send(new GenerateReversalDocumentOfOrder($orderId, $documentDate, $comment));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $documentDate If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
	 * @param string $comment Comment that appears below the stock units.
	 */
	public function generateDunningLetterReversalDocumentOfOrder(
		int $orderId,
		?string $documentDate = null,
		?string $comment = null,
	): Response
	{
		return $this->connector->send(new GenerateDunningLetterReversalDocumentOfOrder($orderId, $documentDate, $comment));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $documentDate If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
	 * @param string $comment Comment that appears below the stock units.
	 */
	public function generateRefundReversalDocumentOfOrder(
		int $orderId,
		?string $documentDate = null,
		?string $comment = null,
	): Response
	{
		return $this->connector->send(new GenerateRefundReversalDocumentOfOrder($orderId, $documentDate, $comment));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $documentDate If not set, the current date will be used. The date has to be entered in W3C format, e.g. '2019-05-29T13:33:23+02:00'.
	 * @param string $comment Comment that appears below the stock units.
	 */
	public function generateSuccessConfirmationOfOrder(
		int $orderId,
		?string $documentDate = null,
		?string $comment = null,
	): Response
	{
		return $this->connector->send(new GenerateSuccessConfirmationOfOrder($orderId, $documentDate, $comment));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param int $documentId The ID of the document
	 */
	public function deleteDocumentOfOrder(int $orderId, int $documentId): Response
	{
		return $this->connector->send(new DeleteDocumentOfOrder($orderId, $documentId));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param int $documentId The ID of the document
	 */
	public function archiveDocumentOfOrder(int $orderId, int $documentId): Response
	{
		return $this->connector->send(new ArchiveDocumentOfOrder($orderId, $documentId));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $type The type of the order document. The available types are receipt, zReport, tillCount, posCouponReceipt, posInvoice, posInvoiceCancellation, cancellation, invoiceExternal, invoice, deliveryNote, poDeliveryNote, creditNote, creditNoteExternal, orderConfirmation, offer, dunningLetter, reversalDunningLetter, returnNote, successConfirmation, correction, reorder, uploaded.
	 * @param string $createdAtFrom Filter that restricts the search result to documents that were created on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $createdAtTo Filter that restricts the search result to documents that were created within a certain period of time. This filter can be used alone or can be combined with the CreatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $updatedAtFrom Filter that restricts the search result to documents that were updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $updatedAtTo Filter that restricts the search result to documents that were updated within a certain period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $displayDateFrom Filter that restricts the search result to documents that were displayed on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param string $displayDateTo Filter that restricts the search result to documents that were displayed within a certain period of time. This filter can be used alone or can be combined with the displayDateFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param array $with Load additional relations for a document. Currently possible are:
	 *     <ul>
	 *     <li>'references' = The document reference objects that are associated with the document.</li>
	 *     </ul>
	 *     Example: <code>?with[]=references</code>
	 * @param bool $withContent Load also the document content as base64 encoded string.
	 */
	public function listDocumentsOfOrder(
		int $orderId,
		string $type,
		?string $createdAtFrom = null,
		?string $createdAtTo = null,
		?string $updatedAtFrom = null,
		?string $updatedAtTo = null,
		?string $displayDateFrom = null,
		?string $displayDateTo = null,
		?array $with = null,
		?bool $withContent = null,
	): Response
	{
		return $this->connector->send(new ListDocumentsOfOrder($orderId, $type, $createdAtFrom, $createdAtTo, $updatedAtFrom, $updatedAtTo, $displayDateFrom, $displayDateTo, $with, $withContent));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $type The document type. Supported types are 'invoiceExternal', 'deliveryNote', 'poDeliveryNote', 'orderConfirmation', 'offer', 'dunningLetter', 'reversalDunningLetter', 'returnNote', 'successConfirmation', 'correction', 'creditNoteExternal', 'reorder', 'uploaded'.
	 */
	public function uploadOrderDocuments(int $orderId, string $type): Response
	{
		return $this->connector->send(new UploadOrderDocuments($orderId, $type));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $type The type of the order document. The available types are invoice, creditNote, dunningLetter
	 * @param bool $withContent Load also the document content as base64 encoded string.
	 */
	public function getCurrentInvoiceOrCreditNoteOfOrder(int $orderId, string $type, ?bool $withContent = null): Response
	{
		return $this->connector->send(new GetCurrentInvoiceOrCreditNoteOfOrder($orderId, $type, $withContent));
	}


	/**
	 * @param int $orderId
	 * @param int $type
	 */
	public function generateDocumentOfOrder(int $orderId, int $type): Response
	{
		return $this->connector->send(new GenerateDocumentOfOrder($orderId, $type));
	}


	/**
	 * @param int $orderId The ID of the order
	 * @param string $type The type of the order document. The available types are receipt, invoiceExternal, invoice, deliveryNote, poDeliveryNote, creditNote, creditNoteExternal, orderConfirmation, offer, dunningLetter, reversalDunningLetter, returnNote, successConfirmation, correction, reversal, reversalRefund, .
	 * @param bool $withContent Load also the document content as base64 encoded string.
	 */
	public function getMostRecentDocumentOfOrder(int $orderId, string $type, ?bool $withContent = null): Response
	{
		return $this->connector->send(new GetMostRecentDocumentOfOrder($orderId, $type, $withContent));
	}
}
