<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Execute the run procedure.
 *
 * Executes the run procedure. Data with sync ID must be specified.
 */
class ExecuteTheRunProcedure extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/{$this->syncId}/run";
	}


	/**
	 * @param int $syncId The ID of the sync
	 * @param int $testrun The test run variable
	 */
	public function __construct(
		protected int $syncId,
		protected int $testrun,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['testrun' => $this->testrun]);
	}
}
