<?php

namespace PlentyOne\Api\Requests\Bi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Return filtered raw data for given key figure
 *
 * Returns a paginated result of raw data items.
 * Can add page - int ,itemsPerPage - int or filters -
 * array as parameters
 */
class ReturnFilteredRawDataForGivenKeyFigure extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/bi/key-figures/raw-data/{$this->keyFigureConfigId}";
	}


	/**
	 * @param int $keyFigureConfigId
	 * @param null|int $page Page
	 * @param null|int $itemsPerPage The number of raw data items to be returned. The default number of files is 50 and the maximum is 250.
	 */
	public function __construct(
		protected int $keyFigureConfigId,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['page' => $this->page, 'itemsPerPage' => $this->itemsPerPage]);
	}
}
