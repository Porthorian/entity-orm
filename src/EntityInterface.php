<?php

declare(strict_types=1);

namespace Porthorian\EntityOrm;

use Porthorian\EntityOrm\Model\ModelInterface;

interface EntityInterface
{
	/**
	 * Takes all current values inside the model and inserts them into the db entity
	 * @throws EntityException - if the insertion query fails some how.
	 * @return an Instance of ModelInterface
	 */
	public function store() : ModelInterface;

	/**
	 * Update the db entity based on the primary key of the model.
	 * @param $params - These are the fields that will be pulled from the model
	 * Ex ['registration_time', 'date_of_birth']
	 * @throws InvalidArgumentException - If the column does not exist inside the model.
	 * @return bool
	*/
	public function update(array $params = []) : bool;

	/**
	 * Delete the entity based on the primary key of the model.
	 * @throws EntityException if the model object is not initialized
	 * @return bool
	 */
	public function delete() : bool;

	/**
	 * @param pk_value - Primary key value
	 * @return A model that extends an instance of ModelInterface
	 */
	public function find(string|int $pk_value) : ModelInterface;

	/**
	 * The database in where the db_table is located.
	 */
	public function getCollectionName() : string;

	/**
	 * The table that we will be manipulating
	 */
	public function getCollectionTable() : string;

	/**
	 * Primary key for the database table
	 */
	public function getCollectionPrimaryKey() : string;

	/**
	 * Houses the namespace path to the model for the entity
	 */
	public function getModelPath() : string;

	/**
	 * Get the current ModelInterface stored in the Entity
	 * @return ModelInterface
	 */
	public function getModel() : ModelInterface;
}
