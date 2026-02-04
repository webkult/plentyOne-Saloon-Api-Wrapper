<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a posting key configuration of an accounting location
 *
 * Gets a posting key configuration of an accounting location. The ID of the accounting location has to
 * be specified. The posting key configuration can contain up to 4 posting keys.
 */
class GetPostingKeyConfigurationOfAccountingLocation extends Request
{
	protected Method $method = Method::GET;


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
