<?php

namespace PlentyOne\Api\Requests\AuditLog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get available audit log archives.
 *
 * Get a list of all available audit log entities grouped by a group name
 */
class GetAvailableAuditLogArchives extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/audit-log/archive";
	}


	public function __construct()
	{
	}
}
