<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List document accounting summaries
 *
 * Lists document accounting summaries. A document accounting summary is saved along with each reversal
 * document (for invoice and credit note). It contains accounting information about the order for this
 * point in time. The summary is saved because an order can be updated after a reversal document is
 * generated. The information about the order before the update is needed for accounting purposes.
 */
class ListDocumentAccountingSummaries extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/documents/accounting_summary";
	}


	/**
	 * @param null|int $orderId The ID of the order.
	 * @param null|string $documentType The document type. The types that can be returned are the following: reversal_document (reversal document for an invoice) and reversal_refund (reversal document for an invoice).
	 * @param null|string $createdAtFrom Get entries with createdAt date after this date.
	 * @param null|string $createdAtTo Get entries with createdAt date before this date.
	 * @param null|int $page The page to get. The default page that will be returned is page 1.
	 * @param null|int $itemsPerPage The number of summaries that should be displayed per page. The default number of orders per page is 10.
	 */
	public function __construct(
		protected ?int $orderId = null,
		protected ?string $documentType = null,
		protected ?string $createdAtFrom = null,
		protected ?string $createdAtTo = null,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'orderId' => $this->orderId,
			'documentType' => $this->documentType,
			'createdAtFrom' => $this->createdAtFrom,
			'createdAtTo' => $this->createdAtTo,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
		]);
	}
}
