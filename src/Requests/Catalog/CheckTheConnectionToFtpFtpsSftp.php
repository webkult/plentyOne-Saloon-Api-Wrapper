<?php

namespace PlentyOne\Api\Requests\Catalog;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Check the connection to FTP, FTPS, SFTP
 *
 * Checks connection to identify possible issues. Can handle FTP, FTPS, SFTP
 */
class CheckTheConnectionToFtpFtpsSftp extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/catalogs/connection/check/{$this->protocol}";
	}


	/**
	 * @param int $protocol
	 */
	public function __construct(
		protected int $protocol,
	) {
	}
}
