<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('getRouteAction')) {
    function getRouteAction()
    {
        return substr(strstr(Route::currentRouteAction(), '@'), 1);
    }
}

// Gets array of custom key & values from Model

if (!function_exists('getKeyValues')) {
    function getKeyValues($model, $value, $key, $where_column = null, $where_id = null)
    {
        $model = "\\App\\Models\\" . $model;
        if ($where_column != null && $where_id != null) {
            $data = $model::where($where_column, $where_id)->pluck($value, $key);
        } else {
            $data = $model::all()->pluck($value, $key);
        }

        return $data;
    }
}
