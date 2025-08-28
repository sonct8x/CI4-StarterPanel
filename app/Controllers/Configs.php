<?php

namespace App\Controllers;
use App\Models\ConfigModel;

class Configs extends BaseController
{
    public function index(): string
    {
        $user_configs = new ConfigModel();
        $data = array_merge($this->data, [
            'title'         => 'Dashboard Page',
            'configs'       => $user_configs->getConfigs()
        ]);
        return view('pages/configs/index', $data);
    }
}
