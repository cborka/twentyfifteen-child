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
               target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/53690932/3_1_FFFFFFFF_EFEFEFFF_0_uniques"
                                                   style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="53690932" data-lang="ru" /></a>
            <!-- /Yandex.Metrika informer -->

            <!-- Yandex.Metrika counter -->
            <script type="text/javascript" >
                (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
                (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

                ym(53690932, "init", {
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    trackHash:true
                });
            </script>
            <noscript><div><img src="https://mc.yandex.ru/watch/53690932" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
            <!-- /Yandex.Metrika counter -->



            <!-- Rating Mail.ru counter -->
            <script type="text/javascript">
                var _tmr = window._tmr || (window._tmr = []);
                _tmr.push({id: "2945281", type: "pageView", start: (new Date()).getTime()});
                (function (d, w, id) {
                    if (d.getElementById(id)) return;
                    var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
                    ts.src = "https://top-fwz1.mail.ru/js/code.js";
                    var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
                    if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
                })(document, window, "topmailru-code");
            </script><noscript><div>
                    <img src="https://top-fwz1.mail.ru/counter?id=2945281;js=na" style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" />
                </div></noscript>
            <!-- //Rating Mail.ru counter -->
            <!-- Rating Mail.ru logo -->
            <a href="https://top.mail.ru/jump?from=2945281">
                <img src="https://top-fwz1.mail.ru/counter?id=2945281;t=479;l=1" style="border:0;" height="31" width="88" alt="Top.Mail.Ru" /></a>
            <!-- //Rating Mail.ru logo -->

            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96451430-1"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'UA-96451430-1');
            </script>

            <!--LiveInternet counter--><a href="https://www.liveinternet.ru/click"
                                          target="_blank"><img id="licntD8D4" width="88" height="31" style="border:0"
                                                               title="LiveInternet: показано число просмотров за 24 часа, посетителей за 24 часа и за сегодня"
                                                               src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAIBTAA7"
                                                               alt=""/></a><script>(function(d,s){d.getElementById("licntD8D4").src=
                    "https://counter.yadro.ru/hit?t14.12;r"+escape(d.referrer)+
                    ((typeof(s)=="undefined")?"":";s"+s.width+"*"+s.height+"*"+
                        (s.colorDepth?s.colorDepth:s.pixelDepth))+";u"+escape(d.URL)+
                    ";h"+escape(d.title.substring(0,150))+";"+Math.random()})
                (document,screen)</script><!--/LiveInternet-->


		</div><!-- .site-info -->



	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>


</body>
</html>
