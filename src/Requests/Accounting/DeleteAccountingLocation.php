<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete an accounting location
 *
 * Deletes an accounting location. The ID of the accounting location must be specified. Standard
 * accounting locations can not be deleted.
 */
class DeleteAccountingLocation extends Request
{
	protected Method $method = Method::DELETE;


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
