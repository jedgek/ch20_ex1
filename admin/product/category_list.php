<?php include '../../view/header.php'; ?>
<?php include '../../view/sidebar_admin.php'; ?>
<section>
    <h1>Product Manager - Category List</h1>
    <?php if (count($categories) == 0) : ?>
        <p>There are no products for this category.</p>
    <?php else : ?>
        <table id="category_table">
            <tr>
                <th>Name</th>
                <th></th>
            </tr>
            <?php foreach($categories as $category): ?>
            <tr>
                <td><?=$category['categoryName']?></td>
                <td>
                    <form action="index.php" method="post" id="delete_category_form">
                    <input type="hidden" name="action" value="delete_category"/>
                    <input type="hidden" name="category_id" 
                        value="<?php echo $category['categoryID']; ?>" />
                    <input type="submit" value="Delete"/>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <h2>Add a Category</h2>
    <form action="index.php" method="post" id="add_category_form">
        <input type="hidden" name="action" value="add_category"/>
        <input type="text" name="category_name" />
               <input type="submit" value="Add"><br>  
    </form>
</section>
<?php include '../../view/footer.php'; ?>