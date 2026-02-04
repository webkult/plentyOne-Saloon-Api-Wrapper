<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update an accounting location
 *
 * Updates an accounting location. The ID of the accounting location must be specified.
 */
class UpdateAccountingLocation extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/accounting/locations/{$this->locationId}";
	}


	/**
	 * @param int $locationId The ID of the accounting location
	 */
	public function __construct(
		protected int $locationId,
	) {
	}
}
