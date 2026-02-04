<?php

namespace PlentyOne\Api\Requests\Feedback;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List feedback comments
 *
 * Lists all feedback comments.
 */
class ListFeedbackComments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/feedbacks/comments";
	}


	public function __construct()
	{
	}
}
