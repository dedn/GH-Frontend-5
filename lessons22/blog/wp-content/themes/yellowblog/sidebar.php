<aside class="right-bar clearfix">
    <ul>
        <li class="subscribe-block">
            <h3 class="bar-title">Sign Up for Newsletter</h3>
            <form class="subscribe-form">
                <input type="text" name="subscribe-name" placeholder="Name">
                <input type="email" name="subscribe-email" placeholder="Email">
                <span class="subscribe-btn">Subscribe<input type="button" name="subscribe-btn"></span>
            </form>
        </li>

        <?php if(!dynamic_sidebar('sidebar')): ?>
        <li class="subscribe-block">
            <h3>Виджеты</h3>
            </li>
        <?php endif;?>

        <?php if(!dynamic_sidebar('sidebar2')): ?>
            <li class="category-bar">
                <h3>Виджеты</h3>
            </li>
        <?php endif;?>

        <?php if(!dynamic_sidebar('sidebar3')): ?>
            <li class="baner-block">
                <h3>Виджеты</h3>
            </li>
        <?php endif;?>


    </ul>
</aside>