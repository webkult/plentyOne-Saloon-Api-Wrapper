<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update region
 *
 * Updates the region. The ID of the sales representative`s region must be specified.
 */
class UpdateRegion extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/sales_representative_regions/{$this->salesRepresentativeRegionId}";
	}


	/**
	 * @param int $salesRepresentativeRegionId The ID of the account contact relation
	 */
	public function __construct(
		protected int $salesRepresentativeRegionId,
	) {
	}
}
