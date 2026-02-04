<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the revenue account configuration of an accounting location
 *
 * Gets the revenue account configuration of an accounting location. A revenue account location
 * configuration contains several revenue accounts. The ID of the accounting location has to be
 * specified.
 */
class GetTheRevenueAccountConfigurationOfAccountingLocation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounting/locations/{$this->locationId}/revenue_account_configurations";
	}


	/**
	 * @param int $locationId The ID of the accounting location.
	 */
	public function __construct(
		protected int $locationId,
	) {
	}
}
