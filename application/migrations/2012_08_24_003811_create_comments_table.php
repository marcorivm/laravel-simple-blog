<?php

class Create_Comments_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function($table)
		{
			$table->increments('id');
			$table->integer('post_id');
			$table->string('commenter', 50);
			$table->string('commenter_email', 50);
			$table->text('content');
			$table->timestamps();
		});
		if(Config::get('database.connections.'.Config::get('database.default').'.driver') != 'sqlite') {
			Schema::table('comments', function($table)
			{
				$table->foreign('post_id')->references('id')->on('posts');
			});
		}
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comments');
	}

}