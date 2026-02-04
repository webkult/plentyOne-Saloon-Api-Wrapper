<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a posting key configuration of an accounting location
 *
 * Updates a posting key configuration of an accounting location. The ID of the accounting location has
 * to be specified.
 */
class UpdatePostingKeyConfigurationOfAccountingLocation extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/accounting/locations/{$this->locationId}/posting_key_configurations";
	}


	/**
	 * @param int $locationId The ID of the accounting location.
	 */
	public function __construct(
		protected int $locationId,
	) {
	}
}
