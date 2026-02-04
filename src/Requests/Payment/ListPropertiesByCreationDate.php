<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List properties by creation date
 *
 * Lists all properties by creation date. The start and the end of the date range must be specified.
 */
class ListPropertiesByCreationDate extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/properties/date";
	}


	/**
	 * @param null|string $startDate The start date of the date range for the date of creation of the property
	 * @param null|string $endDate The end date of the date range for the date of creation of the property
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
