<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a VAT configuration
 *
 * Create a new VAT configuration
 */
class CreateVatConfiguration extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/vat";
	}


	public function __construct()
	{
	}
}
