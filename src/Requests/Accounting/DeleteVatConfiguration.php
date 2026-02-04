<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a VAT configuration
 *
 * Deletes a VAT configuration. The VAT ID must be specified.
 */
class DeleteVatConfiguration extends Request
{
	protected Method $method = Method::DELETE;


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
