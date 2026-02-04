<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get debtor account configuration of an accounting location
 *
 * Gets the debtor account configuration of an accounting location. The ID of the accounting location
 * has to be specified. The debtor account configuration can contain one standard debtor account only
 * or e.g. several accounts for each country of delivery.
 */
class GetDebtorAccountConfigurationOfAccountingLocation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounting/locations/{$this->locationId}/debtor_account_configurations";
	}


	/**
	 * @param int $locationId The ID of the accounting location.
	 */
	public function __construct(
		protected int $locationId,
	) {
	}
}
