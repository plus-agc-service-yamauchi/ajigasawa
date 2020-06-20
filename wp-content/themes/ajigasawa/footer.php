<!-- フッター -->
<footer>
	<div class="container">
		<div class="row">

		</div>
	</div>
</footer>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
<script>
    $('.slick01').slick({
        arrows: false,
        autoplay: true,
        /* ポイントここから～ */
        autoplaySpeed: 0,
        cssEase: 'linear',
        speed: 8000,
        /* ～ここまで */
        slidesToShow: 3,
        slidesToScroll: 1,
    });
</script>
</body>

</html>