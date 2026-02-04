<?php

namespace PlentyOne\Api\Requests\AuditLog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the download url for an restored audit log file
 *
 * Get the download url for an restored audit log file
 */
class GetTheDownloadUrlForRestoredAuditLogFile extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/audit-log/files/{$this->key}/signed-url";
	}


	/**
	 * @param int $key
	 */
	public function __construct(
		protected int $key,
	) {
	}
}
