<?php

class BaseController
{
    const VIEW_FOLDER_NAME = 'views';
    const MODEL_FOLDER_NAME = 'models';

    protected function view($path, $data = [])
    {
        extract($data);
        return require(self::VIEW_FOLDER_NAME . '/' . str_replace('.', '/', $path) . '.php');
    }

    protected function load($modelPath)
    {

        return require(self::MODEL_FOLDER_NAME . '/' . $modelPath . '.php');
    }
}
