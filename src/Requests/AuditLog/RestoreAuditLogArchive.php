<?php

namespace PlentyOne\Api\Requests\AuditLog;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Restore an audit log archive
 *
 * Restore an audit log archive and make it downloadable for approximately 2 days
 */
class RestoreAuditLogArchive extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/audit-log/archive/{$this->key}/restore";
	}


	/**
	 * @param int $key
	 */
	public function __construct(
		protected int $key,
	) {
	}
}
