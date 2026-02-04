<?php

namespace PlentyOne\Api\Requests\AuditLog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the download url for an restored audit log archive
 *
 * Get the download url for an restored audit log archive
 */
class GetTheDownloadUrlForRestoredAuditLogArchive extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/audit-log/archive/{$this->key}/signed-url";
	}


	/**
	 * @param int $key
	 */
	public function __construct(
		protected int $key,
	) {
	}
}
