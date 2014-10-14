<?php

use Larabook\Statuses\LeaveCommentOnStatusCommand;
use Laracasts\Commander\CommanderTrait;

class CommentsController extends \BaseController {
    use CommanderTrait;
	/**
     * Leave a new comment.
	 *
	 * @return Response
	 */
	public function store()
	{
		// fetch the input
        $input = array_add(Input::get(), 'user_id', Auth::id());

        // execute a command to leave a comment on a status
        $this->execute(LeaveCommentOnStatusCommand::class, $input);

        // go back
        return Redirect::back();
	}

}