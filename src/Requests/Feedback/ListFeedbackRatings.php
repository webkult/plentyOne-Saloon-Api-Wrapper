<?php

namespace PlentyOne\Api\Requests\Feedback;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List feedback ratings
 *
 * Lists feedback ratings.
 */
class ListFeedbackRatings extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/feedbacks/ratings";
	}


	public function __construct()
	{
	}
}
