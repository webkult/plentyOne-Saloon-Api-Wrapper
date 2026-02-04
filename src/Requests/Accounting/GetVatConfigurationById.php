<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a VAT configuration by id
 *
 * Get a VAT configuration by id.
 */
class GetVatConfigurationById extends Request
{
	protected Method $method = Method::GET;


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
