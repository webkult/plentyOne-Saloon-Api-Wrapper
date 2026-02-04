<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search for barcodes
 *
 * Searches barcodes. Returns a paginated result.
 */
class SearchForBarcodes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/barcodes";
	}


	/**
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'referrers' = The referrers of the barcode </li></ub>
	 * @param null|string $ids Filter restricts the result to barcodes with the specified IDs. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'.
	 * @param null|string $code Filter restricts the result to barcodes with the specified code. More than one parameter should be separated by commas. Allowed comparators: 'eq' and 'in'.
	 * @param null|string $type Filter restricts the result to barcodes with the specified type. More than one parameter should be separated by commas. Allowed comparator: 'eq', 'in' and 'not'.
	 * @param null|string $referrerIds Filter restricts the result to barcodes with the specified referrers. More than one parameter should be separated by commas. Allowed comparator: 'eq' and 'in'.
	 */
	public function __construct(
		protected ?string $with = null,
		protected ?string $ids = null,
		protected ?string $code = null,
		protected ?string $type = null,
		protected ?string $referrerIds = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'with' => $this->with,
			'ids' => $this->ids,
			'code' => $this->code,
			'type' => $this->type,
			'referrerIds' => $this->referrerIds,
		]);
	}
}
