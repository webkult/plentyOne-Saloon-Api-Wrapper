<?php

namespace PlentyOne\Api\Requests\Bi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get list of raw data files.
 *
 * Get list of raw data files. Valid filter combinations: (dataName), (dataName & processStatus),
 * (createdAtTimestamp)
 */
class GetListOfRawDataFiles extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/reports/raw-data";
	}


	/**
	 * @param null|string $dataName Filter that restricts the search result to raw data files e.g. orders,orderItems.
	 * @param null|string $processStatus Current process status, the status is only changed by internal processing. If this filter is used, the filter dataNames may only contain one value.
	 * @param null|int $createdAtTimestamp Timestamp from when daily generated raw data are to be filtered. This filter cannot be combined with the following filters: dataNames, processStatus
	 * @param null|int $itemsPerPage The number of raw data files to be returned. The default number of files is 20 and the maximum is 100.
	 * @param null|string $sortOrder Defines the sort order, possible values are: asc, desc
	 * @param null|int $page Page
	 */
	public function __construct(
		protected ?string $dataName = null,
		protected ?string $processStatus = null,
		protected ?int $createdAtTimestamp = null,
		protected ?int $itemsPerPage = null,
		protected ?string $sortOrder = null,
		protected ?int $page = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'dataName' => $this->dataName,
			'processStatus' => $this->processStatus,
			'createdAtTimestamp' => $this->createdAtTimestamp,
			'itemsPerPage' => $this->itemsPerPage,
			'sortOrder' => $this->sortOrder,
			'page' => $this->page,
		]);
	}
}
