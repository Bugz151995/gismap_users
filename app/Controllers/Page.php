<?php

namespace App\Controllers;

use \App\Models\AccountModel;
use \App\Models\MarineResourcesModel;

class Page extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        return view('signin');
    }

    public function showPage($page_name, $slug = false)
    {
        session();
        $uri = service('uri');
        $acct = model(AccountModel::class);
        $fish = model(MarineResourcesModel::class);

        $page_data = ['page' => $page_name];
        $uri_data = ['path' => $uri->getPath()];
        $user_data = ['users' => $acct->getUsers()];
        $fish_data = ['marines' => $fish->getMarines()];

        switch ($page_name) {
            case 'home':
                return view($page_name, array_merge($page_data, $uri_data));
                break;

            case 'users':
                if ($slug !== false)
                    return view($page_name, array_merge($page_data, $uri_data, $user_data, ['sel_data' => $acct->getUsers($slug)]));

                return view($page_name, array_merge($page_data, $uri_data, $user_data));
                break;

            case 'map':
                return view($page_name, array_merge($page_data, $uri_data));
                break;

            case 'marine_resources':
                if ($slug !== false)
                    return view($page_name, array_merge($page_data, $uri_data, $fish_data, ['sel_data' => $fish->getMarines($slug)]));

                return view($page_name, array_merge($page_data, $uri_data, $fish_data));
                break;

            default:
                return view('signin');
                break;
        }
    }
}
