<?php

namespace Corp\Http\Controllers;

use Illuminate\Http\Request;

use Corp\Http\Requests;

class SiteController extends Controller
{
    protected $portfolios;
    protected $sliders;
    protected $articles;
    protected $menus;

    protected $template;
    protected $vars = array();

    protected $sidebar_right = false;
    protected $sidebar_left = false;
    protected $sidebar = false;

    public function __construct(){

    }

    protected function renderOutput(){


        return view($this->template)->with($this->vars);
    }

}
