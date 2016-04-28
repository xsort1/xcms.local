@extends('admin.common.list',
    [
        'title'       =>  'Контент',
        'desc'        =>  'Список страниц сайта',
        'model'       =>  'content',
        'fields'      =>  ['name' => 'Наименование', 'slug' => 'Ссылка'],
        'data'        =>  $data,
        'data_fields' =>  ['name', 'slug']
    ]
)
