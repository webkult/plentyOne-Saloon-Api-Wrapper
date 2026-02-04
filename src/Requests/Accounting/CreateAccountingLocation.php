<?php

namespace PlentyOne\Api\Requests\Accounting;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create an accounting location
 *
 * Creates an accounting location for a client. The plenty ID of the client must be specified.
 */
class CreateAccountingLocation extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/accounting/locations";
	}


	public function __construct()
	{
	}
}
