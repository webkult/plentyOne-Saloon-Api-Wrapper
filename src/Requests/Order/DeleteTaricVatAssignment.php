<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete taric vat assignment
 *
 * Deletes a taric code. The taric code and the country ID must be specified.
 */
class DeleteTaricVatAssignment extends Request
{
	protected Method $method = Method::DELETE;


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
