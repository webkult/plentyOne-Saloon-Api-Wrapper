<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List VAT configurations of an accounting location
 *
 * Lists the VAT configurations for all countries of one accounting location
 */
class ListVatConfigurationsOfAccountingLocation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/vat/locations/{$this->locationId}";
	}


	/**
	 * @param int $locationId The ID of the accounting location
	 * @param null|array $with The relations to load with the VAT object. The relations available are location and country.
	 * @param null|array $columns The attributes of the VAT configuration
	 */
	public function __construct(
		protected int $locationId,
		protected ?array $with = null,
		protected ?array $columns = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with[]' => $this->with, 'columns[]' => $this->columns]);
	}
}
