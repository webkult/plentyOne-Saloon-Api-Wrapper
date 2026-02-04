<?php

namespace PlentyOne\Api\Requests\Fulfillment;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Execute a pick list action
 *
 * Execute an action for the given pick list.
 */
class ExecutePickListAction extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/fulfillment/picklist/{$this->id}/{$this->action}";
	}


	/**
	 * @param int $id The pick list ID
	 * @param string $action The action to execute (start, continue, reopen, close, pause)
	 */
	public function __construct(
		protected int $id,
		protected string $action,
	) {
	}
}
