<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List payments of a payment status
 *
 * Lists all payments of a payment status. The ID of the <a
 * href='https://developers.plentymarkets.com/en-gb/developers/main/rest-api-guides/getting-started.html#_payment_status_ids'
 * target='_blank'>payment status</a> must be specified.
 */
class ListPaymentsOfPaymentStatus extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/status/{$this->statusId}";
	}


	/**
	 * @param int $statusId
	 * @param null|int $itemsPerPage The number of items to list per page
	 * @param null|int $page The page of results to search for
	 */
	public function __construct(
		protected int $statusId,
		protected ?int $itemsPerPage = null,
		protected ?int $page = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['itemsPerPage' => $this->itemsPerPage, 'page' => $this->page]);
	}
}
