<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use MetaTag;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function __construct()
    {
        MetaTag::set('description', 'wewe');
        MetaTag::set('image', asset('/favicon/apple-touch-icon.png'));
    }
}
