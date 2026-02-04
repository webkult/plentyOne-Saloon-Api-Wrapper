<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update accounting location settings
 *
 * Updates accounting location settings. The ID of the accounting location must be specified.
 */
class UpdateAccountingLocationSettings extends Request
{
	protected Method $method = Method::PUT;


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
