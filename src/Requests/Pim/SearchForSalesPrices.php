<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search for sales prices
 *
 * Searches for sales prices.
 */
class SearchForSalesPrices extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/sales_prices";
	}


	/**
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>accounts = The accounts of the sales price.</li><li>clients = The clients of the sales price.</li><li>countries = The countries of the sales price.</li><li>currencies = The currencies of the sales price.</li><li>customerClasses = The customer classes of the sales price.</li><li>names = The names of the sales price.</li><li>referrers = The referrer of the sales price.</li></ub>
	 * @param null|string $ids Filter restricts the result to sales prices with the specified IDs. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'.
	 * @param null|string $type Filter restricts the result to sales prices with the specified type. Allowed comparators: 'eq' and 'in'.
	 * @param null|int $customerClassId Filter restricts the result to sales prices with the specified customer class.
	 * @param null|int $currency Filter restricts the result to sales prices with the specified currency.
	 * @param null|int $countryId Filter restricts the result to sales prices with the specified country.
	 * @param null|string $name Filter restricts the result to sales prices with the specified name.
	 * @param null|int $referrerId Filter restricts the result to sales prices with the specified referrer.
	 * @param null|int $plentyId Filter restricts the result to sales prices with the specified plenty ID.
	 * @param null|string $updatedAt Filter restricts the result to sales prices which have been updated in the specified time frame. The from and to parameter should be separated by a comma. If there is no to value, the current time is used instead. Allowed comparator: 'eq'', 'gte', 'lte', 'gt' and 'lt'.
	 */
	public function __construct(
		protected ?string $with = null,
		protected ?string $ids = null,
		protected ?string $type = null,
		protected ?int $customerClassId = null,
		protected ?int $currency = null,
		protected ?int $countryId = null,
		protected ?string $name = null,
		protected ?int $referrerId = null,
		protected ?int $plentyId = null,
		protected ?string $updatedAt = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'with' => $this->with,
			'ids' => $this->ids,
			'type' => $this->type,
			'customerClassId' => $this->customerClassId,
			'currency' => $this->currency,
			'countryId' => $this->countryId,
			'name' => $this->name,
			'referrerId' => $this->referrerId,
			'plentyId' => $this->plentyId,
			'updatedAt' => $this->updatedAt,
		]);
	}
}
