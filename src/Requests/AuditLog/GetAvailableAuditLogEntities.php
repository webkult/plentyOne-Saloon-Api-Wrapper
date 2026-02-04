<?php

namespace PlentyOne\Api\Requests\AuditLog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get available audit log entities.
 *
 * Get a list of all available audit log entities grouped by a group name
 */
class GetAvailableAuditLogEntities extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/audit-log/files";
	}


	public function __construct()
	{
	}
}
