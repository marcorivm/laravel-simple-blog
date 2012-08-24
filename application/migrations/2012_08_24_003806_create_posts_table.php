<?php

class Create_Posts_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function($table)
		{
			$table->increments('id');
			$table->integer('blog_id');
			$table->foreign('blog_id')->references('id')->on('blogs');
			$table->text('content');
			$table->string('title');
			$table->string('tags');
			$table->integer('status', 2);
			/**
			* 0 - Draft
			* 1 - Published
			* 2 - Hidden
			* 3 - Deleted
			**/
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
		Schema::drop('posts');
	}


}