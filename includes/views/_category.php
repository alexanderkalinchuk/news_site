<!--отображает категории новостей на главной странице-->

<div class="<?php echo $category->name ?>">
	<a href="?category=<?php echo $category->name ?>">
		<?php echo $category->name ?>
		<span> <?php echo $category->contains ?> </span>
    </a>
    <hr>
    <div class="<?php echo $category->name ?>-news-content">
        <ul>

        </ul>
    </div>

   <hr>
</div>

