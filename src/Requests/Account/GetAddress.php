<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get address
 *
 * Gets an address. The ID of the address must be specified.
 */
class GetAddress extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/addresses/{$this->addressId}";
	}


	/**
	 * @param int $addressId The ID of the address
	 * @param null|string $with Includes the specified address information in the results. The following parameters are available: <code>options</code>, <code>contactRelations</code>, <code>orderRelations</code>, <code>warehouseRelations</code>, <code>schedulerRelations</code>, <code>reorderRelations</code>. More than one parameter should be separated by commas
	 */
	public function __construct(
		protected int $addressId,
		protected ?string $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with]);
	}
}
