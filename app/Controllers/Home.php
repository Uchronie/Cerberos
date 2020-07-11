<?php

class Home {
	function MainPage() {
		try {
			$view = new view('home');
			$view->render();

		}
		catch (Exception $e)
		{
			echo($e->getMessage());
		}
	}
}

?>
