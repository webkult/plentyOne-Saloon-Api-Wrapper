<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List transactions
 *
 * Lists transaction by filter options.
 */
class ListTransactions extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/ebay/transactions";
	}


	/**
	 * @param null|int $orderId Filter that restricts the search result to transactions with specific ID. Use -1 for open orders
	 * @param null|int $externalOrderId Filter that restricts the search result to transactions with specific external order ID.
	 * @param null|int $transactionId Filter that restricts the search result to transactions with specific transaction ID.
	 * @param null|int $credentialsId Filter that restricts the search result to transactions with specific credentials ID.
	 * @param null|string $buyerUserId Filter that restricts the search result to transactions with specific buyer user ID.
	 * @param null|string $createdAt Filter that restricts the search result to transactions with specific creation date.
	 * @param null|string $endTime Filter that restricts the search result to transactions with end time date.
	 * @param null|string $importStatus Filter that restricts the search result to transactions with specific import status. Possible values are: NEW, IN_PROGRESS, DONE.
	 * @param null|int $page The page of results to search for.
	 * @param null|int $itemsPerPage The number of items to list per page.
	 */
	public function __construct(
		protected ?int $orderId = null,
		protected ?int $externalOrderId = null,
		protected ?int $transactionId = null,
		protected ?int $credentialsId = null,
		protected ?string $buyerUserId = null,
		protected ?string $createdAt = null,
		protected ?string $endTime = null,
		protected ?string $importStatus = null,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'orderId' => $this->orderId,
			'externalOrderId' => $this->externalOrderId,
			'transactionId' => $this->transactionId,
			'credentialsId' => $this->credentialsId,
			'buyerUserId' => $this->buyerUserId,
			'createdAt' => $this->createdAt,
			'endTime' => $this->endTime,
			'importStatus' => $this->importStatus,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
		]);
	}
}
