<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create taric vat assignment
 *
 * Creates a taric vat assignment. The taric code and the country ID must be specified.
 */
class CreateTaricVatAssignment extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


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
