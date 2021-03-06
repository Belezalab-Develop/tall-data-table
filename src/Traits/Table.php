<?php

namespace Tanthammar\TallDataTable\Traits;

trait Table
{
    /**
     * Custom views
     */
    public $tbody = null; // in <tbody> before loop, has $models
    public $tbodyDesktop = null; // in <tbody> in loop, has $model, add tr
    public $tbodyMobile = null; // in <tbode> in loop, has $model, add tr
    public $afterTitle = null; // help article position
    public $noTable = null; //replaces <tbody>, has $models
    public $modal = null; // after main section
    public $customHead = null; //in <thead><tr> before loop, has $groups, add th
    public $theadSlot = null; //add extra th cells, outside of loop
    public $hasRowPanel = false; //click to show panel on each row
    public $rowPanel = null; // in w-full td, colspan-all, has $model + $columns
    public $sidePanel = null; // left side of table, suitable for extended search form

    /**
     * Visibility for areas
     */
    public $tableHeaderEnabled = true;
    public $tableFooterEnabled = false;
    public $arrow = true;
    public $createButton = true;
    public $visibleSortTags = false;
    //protected $groups = [];

    /**
     * Apply Classes
     */
    public $tableClass = null;
    public $tableHeaderClass = null;
    public $tbodyClass = null;
    public $tableFooterClass = null;
    public $trClass = null;
    public $trGridCols = 'sm:grid-cols-2';
    public $theadTrClass = null;
    public $thClass = null;
    public $tdClass = null;
    public $groupedTdClass = null;
    public $groupClass = null;


    /**
     * Methods
     */
    public $title = '';
    public $routePath = '';



    /**
     * @param $attribute
     *
     * @return string|null
     */
    public function setTableHeadClass($attribute): ?string
    {
        return null;
    }

    /**
     * @param $attribute
     *
     * @return string|null
     */
    public function setThWireKey($attribute): ?string
    {
        return null;
    }

    /**
     * @param $attribute
     *
     * @return array|null
     */
    public function setTableHeadAttributes($attribute): array
    {
        return [];
    }


    /**
     * @param $model
     *
     * @return array
     */
    public function setTableRowAttributes($model): array
    {
        return [];
    }

    /**
     * @param $attribute
     * @param $value
     *
     * @return string|null
     */
    public function setTableDataClass($attribute, $value): ?string
    {
        return null;
    }

    /**
     * @param $attribute
     * @param $value
     *
     * @return string|null
     */
    public function setTdWireKey($attribute, $value): ?string
    {
        return null;
    }

    /**
     * @param $attribute
     * @param $value
     *
     * @return array
     */
    public function setTableDataAttributes($attribute, $value): array
    {
        return [];
    }

    public function setTableProperties()
    {
        foreach ([
            'tableClass',
            'tableHeaderClass',
            'tbodyClass',
            'tableFooterClass',
            'trClass',
            'theadTrClass',
            'thClass',
            'tdClass',
            'groupedTdClass',
            'groupClass',
            'tableHeaderEnabled',
            'tableFooterEnabled',
            'arrow',
        ] as $property) {
            $this->$property = $this->$property ?? config('tall-data-table.' . $property);
        }
    }
}
