<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List VAT configurations.
 *
 * Lists the VAT configurations for the given filter. Possible filters are <code>locationId</code>,
 * <code>countryId</code>, <code>taxIdNumber</code> and <code>startedAt</code>.
 */
class ListVatConfigurations extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/vat";
	}


	/**
	 * @param null|int $page The requested page.
	 * @param null|int $itemsPerPage The number of items per page.
	 * @param null|array $with The relations to load with the VAT object. The relations available are location or country.
	 * @param null|array $columns The properties to be loaded.
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?array $with = null,
		protected ?array $columns = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['page' => $this->page, 'itemsPerPage' => $this->itemsPerPage, 'with' => $this->with, 'columns' => $this->columns]);
	}
}
