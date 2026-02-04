<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List taric vat assignments
 *
 * Lists the specified taric vat assignments in the request. This checks the results for the page and
 * items per page
 * specified in the request.
 */
class ListTaricVatAssignments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/system/settings/taric_vat_assignment";
	}


	/**
	 * @param null|int $page The requested page of results
	 * @param null|int $itemsPerPage The number of results per page
	 * @param null|int $countryId The country ID of the taric vat assignments
	 * @param null|int $taricCode The taric code of the taric vat assignments
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?int $countryId = null,
		protected ?int $taricCode = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'countryId' => $this->countryId,
			'taricCode' => $this->taricCode,
		]);
	}
}
