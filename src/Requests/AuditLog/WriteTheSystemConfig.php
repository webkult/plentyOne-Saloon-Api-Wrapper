<?php

namespace PlentyOne\Api\Requests\AuditLog;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Write the system config
 *
 * Update the audit log system configuration. The system configuration contains the information which
 * entities should be logged and which not.
 */
class WriteTheSystemConfig extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/audit-log/system-config";
	}


	public function __construct()
	{
	}
}
