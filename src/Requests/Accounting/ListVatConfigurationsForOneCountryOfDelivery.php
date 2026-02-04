<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List VAT configurations for one country of delivery
 *
 * Lists the VAT configurations for a country of delivery of one accounting location. The ID of the
 * accounting location and the ID of the country of delivery must be specified.
 */
class ListVatConfigurationsForOneCountryOfDelivery extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/vat/locations/{$this->locationId}/countries/{$this->countryId}";
	}


	/**
	 * @param int $locationId The ID of the accounting location
	 * @param int $countryId The ID of the country of delivery
	 * @param null|array $with The relations to load with the VAT object. The relations available are location or country.
	 * @param null|array $columns The attributes of the VAT configuration
	 */
	public function __construct(
		protected int $locationId,
		protected int $countryId,
		protected ?array $with = null,
		protected ?array $columns = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with[]' => $this->with, 'columns[]' => $this->columns]);
	}
}
