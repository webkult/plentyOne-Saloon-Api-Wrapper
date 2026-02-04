<?php

namespace PlentyOne\Api\Requests\LegalInformation;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Return ALL legal texts
 *
 * Return legal texts of all types
 */
class ReturnAllLegalTexts extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/legalinformation/all/{$this->plentyId}/{$this->lang}";
	}


	/**
	 * @param int $plentyId
	 * @param int $lang
	 */
	public function __construct(
		protected int $plentyId,
		protected int $lang,
	) {
	}
}
