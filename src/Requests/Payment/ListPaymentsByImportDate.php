<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List payments by import date
 *
 * Lists all payments by import date within a certain date range. The start and the end of the date
 * range must be specified.
 */
class ListPaymentsByImportDate extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/importdate";
	}


	/**
	 * @param null|string $startDate The start date of the date range for the import date of the payment
	 * @param null|string $endDate The end date of the date range for the import date of the payment
	 * @param null|int $itemsPerPage The number of items to list per page
	 * @param null|int $page The page of results to search for
	 */
	public function __construct(
		protected ?string $startDate = null,
		protected ?string $endDate = null,
		protected ?int $itemsPerPage = null,
		protected ?int $page = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'startDate' => $this->startDate,
			'endDate' => $this->endDate,
			'itemsPerPage' => $this->itemsPerPage,
			'page' => $this->page,
		]);
	}
}
