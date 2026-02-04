<?php

namespace PlentyOne\Api\Requests\LegalInformation;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get legal information of an online store
 *
 * Gets legal information of an online store. The plenty ID of the store , the language and the type of
 * legal information must be specified. The language must be specified as ISO 639-1 code.
 */
class GetLegalInformationOfOnlineStore extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/legalinformation/{$this->plentyId}/{$this->lang}/{$this->type}";
	}


	/**
	 * @param int $plentyId The plenty ID of the online store.
	 * @param string $lang The language of the legal information text. The language must be specified as ISO 639-1 code, e.g. en for English
	 * @param int $type
	 */
	public function __construct(
		protected int $plentyId,
		protected string $lang,
		protected int $type,
	) {
	}
}
