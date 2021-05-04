<?php

defined('_EXEC') or die;

class Index_controller extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if (Format::exist_ajax_request() == true)
		{
			if ($_POST['action'] == 'contact')
			{
				$errors = [];

				if (empty($_POST['name']))
					array_push($errors, ['{$lang.name}: {$lang.dont_leave_this_field_empty}']);

				if (empty($_POST['email']))
					array_push($errors, ['{$lang.email}: {$lang.dont_leave_this_field_empty}']);

				if (empty($_POST['phone']))
					array_push($errors, ['{$lang.phone}: {$lang.dont_leave_this_field_empty}']);

				if (empty($_POST['message']))
					array_push($errors, ['{$lang.message}: {$lang.dont_leave_this_field_empty}']);

				if (empty($errors))
				{
					$mail = new Mailer(true);

					try
					{
						$mail->setFrom(Configuration::$smtp_emailer, Configuration::$web_page);
						$mail->addAddress(Configuration::$vars['contact']['email'], Configuration::$web_page);
						$mail->Subject = 'Nuevo contacto';
						$mail->Body = 'Nombre: ' . $_POST['name'] . '<br>Correo electrónico: ' . $_POST['email'] . '<br>Teléfono: ' . $_POST['phone'] . '<br>Mensaje: ' . $_POST['message'];
						$mail->send();
					}
					catch (Exception $e) {}

					echo json_encode([
						'status' => 'success',
						'message' => '{$lang.thanks_for_contact_us}'
					]);
				}
				else
				{
					echo json_encode([
						'status' => 'error',
						'errors' => $errors
					]);
				}
			}
		}
		else
		{
			define('_title', Configuration::$web_page . ' | {$lang.home}');

			global $global;

			$global['projects'] = $this->model->read_projects(true);

			$template = $this->view->render($this, 'index');

			echo $template;
		}
	}

	public function aboutus()
	{
		define('_title', Configuration::$web_page . ' | {$lang.about_us}');

		$template = $this->view->render($this, 'aboutus');

		echo $template;
	}

	public function services()
	{
		define('_title', Configuration::$web_page . ' | {$lang.services}');

		$template = $this->view->render($this, 'services');

		echo $template;
	}

	public function keyonhand()
	{
		define('_title', Configuration::$web_page . ' | {$lang.key_on_hand}');

		$template = $this->view->render($this, 'keyonhand');

		echo $template;
	}

	public function projects($params)
	{
		define('_title', Configuration::$web_page . ' | {$lang.projects}');

		global $global;

		$global['render'] = !empty($params) ? 'details' : 'list';

		if ($global['render'] == 'list')
			$global['projects'] = $this->model->read_projects();
		else if ($global['render'] == 'details')
			$global['project'] = $this->model->read_project($params[0]);

		$template = $this->view->render($this, 'projects');

		echo $template;
	}

	public function contactus()
	{
		define('_title', Configuration::$web_page . ' | {$lang.contact_us}');

		$template = $this->view->render($this, 'contactus');

		echo $template;
	}

	public function privacynotice()
	{
		define('_title', Configuration::$web_page . ' | {$lang.privacy_notice}');

		$template = $this->view->render($this, 'privacynotice');

		echo $template;
	}
}
