<?php
namespace App\Controller;
/**
 * Application Controller
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class PagesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
    }

    public function index()
    {
        $pages = $this->Pages->find();
        return $pages;
    }
}
