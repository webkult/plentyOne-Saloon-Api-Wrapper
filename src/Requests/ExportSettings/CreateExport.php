<?php

namespace PlentyOne\Api\Requests\ExportSettings;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create an export
 *
 * Creates an export. The name, formatKey, type and outputType must be specified.
 */
class CreateExport extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/exports";
	}


	public function __construct()
	{
	}
}
