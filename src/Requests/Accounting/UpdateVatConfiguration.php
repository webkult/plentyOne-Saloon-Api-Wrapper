<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a VAT configuration
 *
 * Update a VAT configuration.
 */
class UpdateVatConfiguration extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/vat/{$this->vatId}";
	}


	/**
	 * @param int $vatId
	 */
	public function __construct(
		protected int $vatId,
	) {
	}
}
