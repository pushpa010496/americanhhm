<?php
use App\Models\Category;
use App\Models\User;
use App\Models\Page;

function customRequestCaptcha(){
    return new \ReCaptcha\RequestMethod\Post();
}


