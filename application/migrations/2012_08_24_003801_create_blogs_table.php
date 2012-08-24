<?php

class Create_Blogs_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blogs', function($table)
		{
			$table->increments('id');
			$table->string('name', 100);
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('blogs');
	}

}