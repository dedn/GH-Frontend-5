<?php
/*
Template Name: gallery2
*/
?>
<?php get_header(); ?>
<div class="container">
    <section id="main" class="main">


        <h2 class="title">Portfolio</h2>
        <?php
        // берем все имеющиеся термы (категории нашего портфолио) из таксономии category_portfolio
        $categories = get_terms('category_portfolio', array(
            'orderby' => 'count', // в начале показывает категории с большим количеством работ
            'hide_empty' => 0, // скрывает пустые категории
        ));
        ?>



            <ul id="filters" class="clearfix">
                <?php
                /* формируем структуру меню фильтра для портфолио на основе полученных категорий */
                foreach ($categories as $cat) {
                    if ($cat->parent == 0 && $cat->count > 0) {
                        $singleCat .= '<li><span class="filter" data-filter="' . $cat->slug . '">' . $cat->name . '</span></li>';
                        $allCat .= $cat->slug . ' ';
                    }
                }
                echo '<li><span class="filter active" data-filter="' . $allCat . '">All</span></li>';
                echo $singleCat;
                /* формируем структуру меню фильтра для портфолио на основе полученных категорий */
                ?>
            </ul>
            <div id="portfoliolist">
                <?php
                // выводим работы из портфолио
                $args = array(
                    'post_type' => 'my_works' // указываем записи какого типа необходимо достать
                );
                $query = new WP_Query;
                $portfolio_item = $query->query($args); // делаем запрос данных
                foreach ($portfolio_item as $item) {
                    $category = get_the_terms($item->ID, 'category_portfolio'); // достае все термы таксономии category_portfolio
                    $flag = 0;

                    $attachmentId = get_post_thumbnail_id($item->ID);
                    $thymbUrlThumbnail = wp_get_attachment_link($attachmentId, 'portfolio-thumbnail');
                    // берем URL миниатюры, которая относится к записи
                    echo '
											<div class="portfolio '.$dataCat.'" data-cat="'.$dataCat.'">
												<div class="portfolio-wrapper">
												'.$thymbUrlThumbnail.'
													<div class="label">
														<div class="label-text">
															<a class="text-title">'.$item->post_title.'</a>
															<span class="text-category">'.$dataCatComma.'</span>
														</div>
														<div class="label-bg"></div>
													</div>
												</div>
											</div>
										';
                }
                ?>

                <div class="pagination">
                    <?php wp_pagenavi(); ?>

                </div>


    </section>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

<?php wp_footer(); ?>
</body>
</html>