<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List payments of a transaction type
 *
 * Lists all payments of a transaction type. The ID of the transaction type must be specified.
 */
class ListPaymentsOfTransactionType extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/transactions/{$this->transactionTypeId}";
	}


	/**
	 * @param int $transactionTypeId
	 * @param null|int $itemsPerPage The number of items to list per page
	 * @param null|int $page The page of results to search for
	 */
	public function __construct(
		protected int $transactionTypeId,
		protected ?int $itemsPerPage = null,
		protected ?int $page = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['itemsPerPage' => $this->itemsPerPage, 'page' => $this->page]);
	}
}
