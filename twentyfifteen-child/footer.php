<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
			?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyfifteen' ) ); ?>" class="imprint">
				<?php printf( __( 'Proudly powered by %s', 'twentyfifteen' ), 'WordPress' ); ?>
			</a>
			<br><a href="https://eurobyte.ru/?referer=146081" class="imprint">
				Надёжный хостинг "Евробайт"
			</a>
            <br>
            ---
            <br>
            <!-- Yandex.Metrika informer -->
            <a href="https://metrika.yandex.ru/stat/?id=53690932&amp;from=informer"
            target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/53690932/3_0_FFFFFFFF_EFEFEFFF_0_uniques"
            style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="53690932" data-lang="ru" /></a>
            <!-- /Yandex.Metrika informer -->

            <!-- Yandex.Metrika counter -->
            <script type="text/javascript" >
                (function (d, w, c) {
                    (w[c] = w[c] || []).push(function() {
                        try {
                            w.yaCounter53690932 = new Ya.Metrika({
                                id:53690932,
                                clickmap:true,
                                trackLinks:true,
                                accurateTrackBounce:true,
                                trackHash:true
                            });
                        } catch(e) { }
                    });

                    var n = d.getElementsByTagName("script")[0],
                        s = d.createElement("script"),
                        f = function () { n.parentNode.insertBefore(s, n); };
                    s.type = "text/javascript";
                    s.async = true;
                    s.src = "https://mc.yandex.ru/metrika/watch.js";

                    if (w.opera == "[object Opera]") {
                        d.addEventListener("DOMContentLoaded", f, false);
                    } else { f(); }
                })(document, window, "yandex_metrika_callbacks");
            </script>
            <noscript><div><img src="https://mc.yandex.ru/watch/53690932" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
            <!-- /Yandex.Metrika counter -->


		</div><!-- .site-info -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-96451430-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-96451430-1');
</script>


	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>


</body>
</html>
