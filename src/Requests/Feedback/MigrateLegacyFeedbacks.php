<?php

namespace PlentyOne\Api\Requests\Feedback;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Migrate legacy feedbacks
 *
 * @return \Plenty\Modules\Feedback\Models\Feedback[]
 */
class MigrateLegacyFeedbacks extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/feedbacks/migrate";
	}


	public function __construct()
	{
	}
}
