<?php
function getCategories()
{

    $query = "select
                    a.nid
                    from node a  where a.type='category' ";
    $records = db_query($query);
    $categories = array();
    foreach ($records as $record) {
        $categories[] = $record->nid;
    }
    return $categories;
}
function buildCategoriesHTMLGrid($categories){
       sort($categories);
    $ul=array();
    for($i=0;$i<4;$i++){
        $ul[$i]="<ul class='nav-stacked nav'>";
    }
    $categories_size=count($categories);
    for($j=0;$j<$categories_size;$j++){
        $title=node_load($categories[$j])->title;
        $ul[$j % 4].="<li><a href='listings?cid={$categories[$j]}'>{$title}</a></li>";
    }

    for($i=0;$i<4;$i++){
        $ul[$i].="</ul>";
    }
    return $ul;
}