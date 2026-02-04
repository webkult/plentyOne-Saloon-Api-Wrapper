<?php

namespace PlentyOne\Api\Requests\Wizard;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Perform an action of a registered actionHandlerClass of a given wizard
 *
 * Performs an action of a registered actionHandlerClass of a given wizard
 */
class PerformActionOfRegisteredActionHandlerClassOfGivenWizard extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/wizards/{$this->wizardKey}/actions/{$this->actionKey}";
	}


	/**
	 * @param int $wizardKey
	 * @param int $actionKey
	 */
	public function __construct(
		protected int $wizardKey,
		protected int $actionKey,
	) {
	}
}
