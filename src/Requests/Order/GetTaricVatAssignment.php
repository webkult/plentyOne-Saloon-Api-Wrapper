<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get taric vat assignment
 *
 * Gets a taric vat assignment. The taric code and the country ID must be specified.
 */
class GetTaricVatAssignment extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/system/settings/taric_vat_assignment/{$this->taricCode}/{$this->countryId}";
	}


	/**
	 * @param string $taricCode The taric code.
	 * @param int $countryId The country id.
	 */
	public function __construct(
		protected string $taricCode,
		protected int $countryId,
	) {
	}
}
