<?php

namespace PlentyOne\Api\Requests\Blog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a blog post
 *
 * Gets a blog post based on its ID.
 */
class GetBlogPost extends Request
{
	protected Method $method = Method::GET;


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
