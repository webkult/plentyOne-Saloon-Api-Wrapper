<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Category\CreateNewCategories;
use PlentyOne\Api\Requests\Category\DeactivateAvailabilityForClients;
use PlentyOne\Api\Requests\Category\DeleteCategoryDetailsForTheSpecifiedLanguages;
use PlentyOne\Api\Requests\Category\DeleteCategoryTemplate;
use PlentyOne\Api\Requests\Category\DeletesCategory;
use PlentyOne\Api\Requests\Category\GetCategory;
use PlentyOne\Api\Requests\Category\GetCategoryTemplate;
use PlentyOne\Api\Requests\Category\GetCategoryTree;
use PlentyOne\Api\Requests\Category\GetCategoryTrees;
use PlentyOne\Api\Requests\Category\ListCategories;
use PlentyOne\Api\Requests\Category\UpdateCategories;
use PlentyOne\Api\Requests\Category\UpdateCategoryTemplate;
use PlentyOne\Api\Requests\Category\UpdatesOneCategory;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Category extends BaseResource
{
	/**
	 * @param int $page The requested page of results
	 * @param int $itemsPerPage The number of results per page
	 * @param string $with Includes the detail information, the active clients (stores) list of the category, all linked tags and their information and/or the linked Elmar category for each client. Available values: details, clients, elmarCategories, tags
	 * @param string $lang The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>languages</a> of the category detail information. Several languages must be separated by commas. If no language filter is set, the default language of the system is used.
	 * @param string $type The category type. Available values: item, container, content, blog
	 * @param int $parentId The unique ID of the parent category
	 * @param int $plentyId The unique plenty ID of the client (store)
	 * @param string $name The name of the category
	 * @param string $level The level of the category
	 * @param bool $linklist Filter for the linklist of categories
	 * @param string $updatedAt Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.
	 * @param int $tagId Filter restricts the list of results to items with a specific tag
	 * @param string $metaKeywords Filter restricts the list of results to items with a specific meta keyword. Possible search operators are 'like' and 'eq'.
	 */
	public function listCategories(
		?int $page = null,
		?int $itemsPerPage = null,
		?string $with = null,
		?string $lang = null,
		?string $type = null,
		?int $parentId = null,
		?int $plentyId = null,
		?string $name = null,
		?string $level = null,
		?bool $linklist = null,
		?string $updatedAt = null,
		?int $tagId = null,
		?string $metaKeywords = null,
	): Response
	{
		return $this->connector->send(new ListCategories($page, $itemsPerPage, $with, $lang, $type, $parentId, $plentyId, $name, $level, $linklist, $updatedAt, $tagId, $metaKeywords));
	}


	public function updateCategories(): Response
	{
		return $this->connector->send(new UpdateCategories());
	}


	public function createNewCategories(): Response
	{
		return $this->connector->send(new CreateNewCategories());
	}


	/**
	 * @param int $id The ID of the category
	 * @param int $page The requested page of results
	 * @param int $itemsPerPage The number of results per page
	 * @param string $with Includes the detail information, the active clients (stores) list of the category and/or the linked Elmar category for each client. Available values: details, clients, elmarCategories
	 * @param string $lang The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>languages</a> of the category detail information. Several languages must be separated by commas. If no language filter is set, the default language of the system is used.
	 * @param string $type The category type. Available values: item, container, content, blog
	 * @param int $parentId The unique ID of the parent category
	 * @param int $plentyId The unique plenty ID of the client (store)
	 * @param string $name The name of the category
	 * @param string $level The level of the category
	 * @param bool $linklist Filter for the linklist of categories
	 * @param string $updatedAt Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.
	 */
	public function getCategory(
		int $id,
		?int $page = null,
		?int $itemsPerPage = null,
		?string $with = null,
		?string $lang = null,
		?string $type = null,
		?int $parentId = null,
		?int $plentyId = null,
		?string $name = null,
		?string $level = null,
		?bool $linklist = null,
		?string $updatedAt = null,
	): Response
	{
		return $this->connector->send(new GetCategory($id, $page, $itemsPerPage, $with, $lang, $type, $parentId, $plentyId, $name, $level, $linklist, $updatedAt));
	}


	/**
	 * @param int $id
	 */
	public function updatesOneCategory(int $id): Response
	{
		return $this->connector->send(new UpdatesOneCategory($id));
	}


	/**
	 * @param int $id
	 */
	public function deletesCategory(int $id): Response
	{
		return $this->connector->send(new DeletesCategory($id));
	}


	/**
	 * @param int $id
	 */
	public function deactivateAvailabilityForClients(int $id): Response
	{
		return $this->connector->send(new DeactivateAvailabilityForClients($id));
	}


	/**
	 * @param int $id
	 */
	public function deleteCategoryDetailsForTheSpecifiedLanguages(int $id): Response
	{
		return $this->connector->send(new DeleteCategoryDetailsForTheSpecifiedLanguages($id));
	}


	/**
	 * @param int $id
	 * @param string $lang The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>language</a> of the template. If no language filter is set, the default language of the system is used.
	 * @param int $plentyId The unique plenty ID of the client (store)
	 */
	public function getCategoryTemplate(int $id, ?string $lang = null, int $plentyId): Response
	{
		return $this->connector->send(new GetCategoryTemplate($id, $lang, $plentyId));
	}


	/**
	 * @param int $id
	 */
	public function updateCategoryTemplate(int $id): Response
	{
		return $this->connector->send(new UpdateCategoryTemplate($id));
	}


	/**
	 * @param int $id
	 */
	public function deleteCategoryTemplate(int $id): Response
	{
		return $this->connector->send(new DeleteCategoryTemplate($id));
	}


	/**
	 * @param int $page The requested page of results
	 * @param int $itemsPerPage The number of results per page
	 * @param string $type The category type. Available values: item, container, content, blog
	 */
	public function getCategoryTrees(?int $page = null, ?int $itemsPerPage = null, ?string $type = null): Response
	{
		return $this->connector->send(new GetCategoryTrees($page, $itemsPerPage, $type));
	}


	/**
	 * @param int $id The unique category ID
	 */
	public function getCategoryTree(int $id): Response
	{
		return $this->connector->send(new GetCategoryTree($id));
	}
}
