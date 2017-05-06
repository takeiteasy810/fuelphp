<?php

class Controller_Test extends Controller
{

	public function action_index()
	{
                $form = Fieldset_Test::forge("testform");
                $view = Presenter::forge('test/index.smarty');
                $view->set_safe('form', $form->build());

		return Response::forge($view);
	}

}
