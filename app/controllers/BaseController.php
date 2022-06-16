<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

    public function getItem($id)
    {
        $items = new Items();
        try{
            $item =  $items->getItem($id);
            echo $item;
        }
        catch (Exception $e){
            echo 'No element with id '.$id;
        }
    }

    public function postMessage()
    {
        echo Input::get('message');
    }


}
