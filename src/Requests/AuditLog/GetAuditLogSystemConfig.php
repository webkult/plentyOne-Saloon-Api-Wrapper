<?php

namespace PlentyOne\Api\Requests\AuditLog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get audit log system config
 *
 * Get the current audit log configuration. The system configuration contains the information which
 * entities should be logged and which not.
 */
class GetAuditLogSystemConfig extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/audit-log/system-config";
	}


	public function __construct()
	{
	}
}
