<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Board\CheckReferenceKey;
use PlentyOne\Api\Requests\Board\CopyColumn;
use PlentyOne\Api\Requests\Board\CopyTask;
use PlentyOne\Api\Requests\Board\CreateColumnAndAssignItToBoard;
use PlentyOne\Api\Requests\Board\CreateReference;
use PlentyOne\Api\Requests\Board\CreateTaskInSpecificColumn;
use PlentyOne\Api\Requests\Board\DeleteColumn;
use PlentyOne\Api\Requests\Board\DeleteReferenceFromGivenTask;
use PlentyOne\Api\Requests\Board\DeleteTask;
use PlentyOne\Api\Requests\Board\GetTaskById;
use PlentyOne\Api\Requests\Board\ListAllColumnsOfGivenBoard;
use PlentyOne\Api\Requests\Board\ListAllTaskOfColumn;
use PlentyOne\Api\Requests\Board\UpdateColumn;
use PlentyOne\Api\Requests\Board\UpdatePositionOfOfColumn;
use PlentyOne\Api\Requests\Board\UpdateTask;
use PlentyOne\Api\Requests\Board\UpdateTaskPosition;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Board extends BaseResource
{
	/**
	 * @param string $boardId The ID of the board
	 */
	public function listAllColumnsOfGivenBoard(string $boardId): Response
	{
		return $this->connector->send(new ListAllColumnsOfGivenBoard($boardId));
	}


	/**
	 * @param string $boardId The ID of the board
	 */
	public function createColumnAndAssignItToBoard(string $boardId): Response
	{
		return $this->connector->send(new CreateColumnAndAssignItToBoard($boardId));
	}


	/**
	 * @param string $boardId The ID of the board
	 * @param string $columnId The ID of the column
	 */
	public function updateColumn(string $boardId, string $columnId): Response
	{
		return $this->connector->send(new UpdateColumn($boardId, $columnId));
	}


	/**
	 * @param string $boardId The ID of the board
	 * @param string $columnId The ID of the column
	 */
	public function copyColumn(string $boardId, string $columnId): Response
	{
		return $this->connector->send(new CopyColumn($boardId, $columnId));
	}


	/**
	 * @param string $boardId The ID of the board
	 * @param string $columnId The ID of the column
	 */
	public function deleteColumn(string $boardId, string $columnId): Response
	{
		return $this->connector->send(new DeleteColumn($boardId, $columnId));
	}


	/**
	 * @param string $boardId The ID of the board
	 * @param string $columnId The ID of the column
	 * @param int $position The position number
	 */
	public function updatePositionOfOfColumn(string $boardId, string $columnId, int $position): Response
	{
		return $this->connector->send(new UpdatePositionOfOfColumn($boardId, $columnId, $position));
	}


	/**
	 * @param string $boardId The ID of the board
	 * @param string $columnId The ID of the column
	 * @param int $startAt The position of a task to start listing at
	 * @param int $tasksPerPage The number of tasks to list per page
	 */
	public function listAllTaskOfColumn(
		string $boardId,
		string $columnId,
		?int $startAt = null,
		?int $tasksPerPage = null,
	): Response
	{
		return $this->connector->send(new ListAllTaskOfColumn($boardId, $columnId, $startAt, $tasksPerPage));
	}


	/**
	 * @param string $boardId The ID of the board
	 * @param string $columnId The ID of the column
	 */
	public function createTaskInSpecificColumn(string $boardId, string $columnId): Response
	{
		return $this->connector->send(new CreateTaskInSpecificColumn($boardId, $columnId));
	}


	/**
	 * @param string $boardId The ID of the board
	 * @param string $columnId The ID of the column
	 * @param string $taskId The ID of the task
	 */
	public function getTaskById(string $boardId, string $columnId, string $taskId): Response
	{
		return $this->connector->send(new GetTaskById($boardId, $columnId, $taskId));
	}


	/**
	 * @param string $boardId The ID of the board
	 * @param string $columnId The ID of the column
	 * @param string $taskId The ID of the task
	 */
	public function updateTask(string $boardId, string $columnId, string $taskId): Response
	{
		return $this->connector->send(new UpdateTask($boardId, $columnId, $taskId));
	}


	/**
	 * @param string $boardId The ID of the board
	 * @param string $columnId The ID of the column
	 * @param string $taskId The ID of the task
	 */
	public function copyTask(string $boardId, string $columnId, string $taskId): Response
	{
		return $this->connector->send(new CopyTask($boardId, $columnId, $taskId));
	}


	/**
	 * @param string $boardId The ID of the board
	 * @param string $columnId The ID of the column
	 * @param string $taskId The ID of the task
	 */
	public function deleteTask(string $boardId, string $columnId, string $taskId): Response
	{
		return $this->connector->send(new DeleteTask($boardId, $columnId, $taskId));
	}


	/**
	 * @param string $boardId The ID of the board
	 * @param string $columnId The ID of the column the task belongs to
	 * @param string $taskId The ID of the task
	 * @param int $position The new position of the task
	 */
	public function updateTaskPosition(string $boardId, string $columnId, string $taskId, int $position): Response
	{
		return $this->connector->send(new UpdateTaskPosition($boardId, $columnId, $taskId, $position));
	}


	/**
	 * @param string $boardId The ID of the board
	 * @param string $columnId The ID of the column
	 * @param string $taskId The ID of the task
	 * @param string $referenceValue Reference type followed by foreign ID of the referenced object. Syntax: TYPE-ID Example: user-123456 Types: user,ticket,contact,order,item
	 */
	public function createReference(string $boardId, string $columnId, string $taskId, string $referenceValue): Response
	{
		return $this->connector->send(new CreateReference($boardId, $columnId, $taskId, $referenceValue));
	}


	/**
	 * @param string $boardId The ID of the task
	 * @param string $columnId The ID of the column
	 * @param string $taskId The ID of the task
	 * @param string $referenceId The ID of the reference
	 */
	public function deleteReferenceFromGivenTask(
		string $boardId,
		string $columnId,
		string $taskId,
		string $referenceId,
	): Response
	{
		return $this->connector->send(new DeleteReferenceFromGivenTask($boardId, $columnId, $taskId, $referenceId));
	}


	/**
	 * @param string $boardId The ID of the board
	 * @param string $columnId The ID of the column
	 * @param string $taskId The ID of the task
	 * @param string $referenceType The type of the reference
	 * @param int $referenceKey The key of the reference
	 */
	public function checkReferenceKey(
		string $boardId,
		string $columnId,
		string $taskId,
		string $referenceType,
		int $referenceKey,
	): Response
	{
		return $this->connector->send(new CheckReferenceKey($boardId, $columnId, $taskId, $referenceType, $referenceKey));
	}
}
