<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Lists the debtor accounts by mode.
 *
 * Lists the debtor accounts of an accounting location by mode. The ID of the accounting location and
 * the mode have to be specified.
 */
class ListsTheDebtorAccountsByMode extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounting/locations/{$this->locationId}/debtor_accounts/{$this->mode}";
	}


	/**
	 * @param int $locationId The ID of the accounting location.
	 * @param string $mode The mode defines how pending amounts are assigned to debtor accounts. The following modes are available:
	 *      <ul>
	 *       <li>character        = The debtor accounts are selected based on the first character of customer information. The information and the order of the information that will be used are defined with the sequence. There are 3 different sequences available.</li>
	 *       <li>payment          = The debtor accounts are selected based on the payment method.</li>
	 *       <li>country          = The debtor accounts are selected based on the country of delivery.</li>
	 *       <li>country_payment  = The debtor accounts are selected based on two criteria. The first criteria is the country and if the country is same as the country of the accounting location then the payment method is used to select the deptor account.</li>
	 *      </ul>
	 */
	public function __construct(
		protected int $locationId,
		protected string $mode,
	) {
	}
}
