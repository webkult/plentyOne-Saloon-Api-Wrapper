<?php

namespace PlentyOne\Api\Requests\Blog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a blog post
 *
 * Updates a blog post based on its ID.
 */
class UpdateBlogPost extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/blogs/post/{$this->postId}";
	}


	/**
	 * @param int $postId
	 */
	public function __construct(
		protected int $postId,
	) {
	}
}
