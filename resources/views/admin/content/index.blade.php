@extends('admin.common.list',
    [
        'title'    =>  'Контент',
        'desc'     =>  'Список страниц сайта',
        'model'    =>  'content',
        'fields'   =>  ['ID','Наименование', 'Ссылка', 'Создан'],
        'data'     =>  $data
    ]
)
