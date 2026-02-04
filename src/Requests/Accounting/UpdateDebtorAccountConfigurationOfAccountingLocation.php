<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update debtor account configuration of an accounting location
 *
 * Updates the debtor account configuration of an accounting location. The ID of the accounting
 * location has to be specified.
 */
class UpdateDebtorAccountConfigurationOfAccountingLocation extends Request
{
	protected Method $method = Method::PUT;


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
