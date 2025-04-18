<?php get_header(); ?>

<div class="contact-content">
    <h2>Контактная информация</h2>
    <div class="address">
        <h3>Адрес</h3>
        <p>г. Москва, ул. Ленина, д. 10</p>
    </div>
    <div class="phone">
        <h3>Телефон</h3>
        <p>+7 (495) 123-45-67</p>
    </div>
    <div class="hours">
        <h3>Часы работы</h3>
        <p>Пн-Пт: 9:00–19:00<br>Сб-Вс: 10:00–18:00</p>
    </div>
    <div class="map">
        <?php echo do_shortcode('[google_map_embed]'); ?>
    </div>
</div>

<?php get_footer(); ?>