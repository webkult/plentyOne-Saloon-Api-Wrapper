<?php

namespace PlentyOne\Api\Requests\Wizard;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Load dynamic data
 *
 * Loads dynamic data of a given wizard.
 */
class LoadDynamicData extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/wizards/{$this->wizardKey}/formfields/{$this->formfieldKey}";
	}


	/**
	 * @param int $wizardKey
	 * @param int $formfieldKey
	 */
	public function __construct(
		protected int $wizardKey,
		protected int $formfieldKey,
	) {
	}
}
