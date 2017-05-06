<?php
class Controller_Customer extends Controller_Template
{

        public $template = 'customer_template';

	public function action_index()
	{
		$data['customers'] = Model_Customer::find('all');
		$this->template->title = "Customers";
		$this->template->content = View::forge('customer/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('customer');

		if ( ! $data['customer'] = Model_Customer::find($id))
		{
			Session::set_flash('error', 'ユーザが見つかりません #'.$id);
			Response::redirect('customer');
		}

		$this->template->title = "Customer";
		$this->template->content = View::forge('customer/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Customer::validate('create');

			if ($val->run())
			{
				$customer = Model_Customer::forge(array(
					'name' => Input::post('name'),
					'mail' => Input::post('mail'),
					'tel' => Input::post('tel'),
				));

				if ($customer and $customer->save())
				{
					Session::set_flash('success', '追加しました #'.$customer->id.'.');

					Response::redirect('customer');
				}

				else
				{
					Session::set_flash('error', '追加に失敗しました');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Customers";
		$this->template->content = View::forge('customer/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('customer');

		if ( ! $customer = Model_Customer::find($id))
		{
			Session::set_flash('error', 'ユーザが見つかりませんでした #'.$id);
			Response::redirect('customer');
		}

		$val = Model_Customer::validate('edit');

		if ($val->run())
		{
			$customer->name = Input::post('name');
			$customer->mail = Input::post('mail');
			$customer->tel = Input::post('tel');

			if ($customer->save())
			{
				Session::set_flash('success', '更新しました #' . $id);

				Response::redirect('customer');
			}

			else
			{
				Session::set_flash('error', '更新に失敗しました #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$customer->name = $val->validated('name');
				$customer->mail = $val->validated('mail');
				$customer->tel = $val->validated('tel');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('customer', $customer, false);
		}

		$this->template->title = "Customers";
		$this->template->content = View::forge('customer/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('customer');

		if ($customer = Model_Customer::find($id))
		{
			$customer->delete();

			Session::set_flash('success', '削除しました #'.$id);
		}

		else
		{
			Session::set_flash('error', '削除に失敗しました #'.$id);
		}

		Response::redirect('customer');

	}

}
