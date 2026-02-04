<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get posting accounts by country and webstore
 *
 * Get all posting accounts for a country of a webstore.
 */
class GetPostingAccountsByCountryAndWebstore extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounting/locations/{$this->webstoreId}/{$this->countryId}/posting_accounts";
	}


	/**
	 * @param int $countryId The ID of the country
	 * @param int $webstoreId
	 * @param int $webstoreId The ID of the webstore
	 */
	public function __construct(
		protected int $countryId,
		protected int $webstoreId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['$webstoreId' => $this->webstoreId]);
	}
}
