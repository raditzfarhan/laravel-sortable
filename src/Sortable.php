<?php
namespace RaditzFarhan\LaravelSortable;

trait Sortable {

    public static function bootSortable()
    {
        static::creating(function ($model) {
          
            $sortable_attribute = $model->getSortableColumn();
            
            if(!$model->$sortable_attribute){
                $model->$sortable_attribute = $model->max($sortable_attribute) + 1;
            }
        });

    }

    public function getSortableColumn()
    {
        return isset(self::$sortable) ? self::$sortable : 'sort_order';
    }
}