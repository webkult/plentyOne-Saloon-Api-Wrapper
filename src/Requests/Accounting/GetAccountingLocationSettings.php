<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get accounting location settings
 *
 * Gets accounting location settings. The ID of the accounting location must be specified.
 */
class GetAccountingLocationSettings extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounting/locations/{$this->locationId}/settings";
	}


	/**
	 * @param int $locationId The ID of the accounting location
	 */
	public function __construct(
		protected int $locationId,
	) {
	}
}
