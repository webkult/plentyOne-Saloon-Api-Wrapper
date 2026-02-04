<?php

namespace PlentyOne\Api\Requests\LegalInformation;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * update the text in the plenty_text table
 *
 * if we send only plainText it will be saved in htmlText
 */
class UpdateTheTextInThePlentyTextTable extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


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
