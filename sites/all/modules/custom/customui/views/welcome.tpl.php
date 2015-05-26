<?php
module_load_include('inc', 'customui', 'common');
$categories = getCategories();
$categoriesGrid = buildCategoriesHTMLGrid($categories);
?>

<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <h4>Browse by category</h4>
    </div>
    <div class="col-md-2">
    </div>
</div>
<div class="row categories">
    <div class="col-md-2">
    </div>
    <div class="col-md-2">
        <?php
        print $categoriesGrid[0];
        ?>
    </div>
    <div class="col-md-2">
        <?php
        print $categoriesGrid[1];
        ?>

    </div>
    <div class="col-md-2">
        <?php
        print $categoriesGrid[2];
        ?>

    </div>

    <div class="col-md-2">
        <?php
        print $categoriesGrid[3];
        ?>

    </div>
    <div class="col-md-2">
    </div>
</div>
