<?php

class error404Controller extends baseController
{

        public function index()
        {
                $this->registry->template->blog_heading = 'This is the 404';
                $this->registry->template->show('error404');
        }


}
?>