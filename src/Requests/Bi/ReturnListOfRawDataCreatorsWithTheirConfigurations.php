<?php

namespace PlentyOne\Api\Requests\Bi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Return a list of raw data creators with their configurations
 *
 * Returns list of paginated raw data creators with their configurations, by default itemsPerPage=50
 */
class ReturnListOfRawDataCreatorsWithTheirConfigurations extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/reports/raw-data/creators-configs";
	}


	/**
	 * @param int $page The page to get. The default page that will be returned is page 1.
	 * @param int $itemsPerPage The number of raw data creators to be displayed per page. The default number of raw data creators per page is 50.
	 */
	public function __construct(
		protected int $page,
		protected int $itemsPerPage,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['page' => $this->page, 'itemsPerPage' => $this->itemsPerPage]);
	}
}
