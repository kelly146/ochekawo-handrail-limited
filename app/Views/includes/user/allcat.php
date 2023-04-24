<div class="category-sidebar">
    <div class="widget category-list">
        <h4 class="widget-header">All Category</h4>
        <ul class="category-list">
            <?php
            for ($i = 0; $i < count($allcat); $i++) {
                echo "<li><a  href='{$base}category/{$allcat[$i]['category_id']}'>{$allcat[$i]['category_name']}</a></li>";
            }
            ?>
        </ul>
    </div>


</div>