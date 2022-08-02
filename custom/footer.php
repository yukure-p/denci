<?php
if ( get_current_blog_id() === BLOG_ID_JP ) {?>


<footer>
	<div class="l-footer">
		<div class="footer-logo">
			<section>
				<h1 class="f-logo"><a href="<?php echo esc_url (home_url()); ?>"><img src="<?php echo get_template_directory_uri()?>/img/common/logo.svg" alt="SOUNDLOG"><span class="f-logo-kana">サウンドログ</span></a></h1>
				<h2 class="f-txt">SOUNDLOG(サウンドログ)は、Techno、house、IDMなどのエレクトロニックミュージックを紹介するサイトです。<br>
				</h2>
			</section>
		</div>
		<div class="footer-link">
			<section>
				<!-- <h3 class="f-tit">Link</h3> -->
				<ul class="f-link">
					<li><a href="" class="link01">ABOUT</a></li>
					<li><a href="" class="link01">CONTACT</a></li>
				</ul>
			</section>
		</div>
		<p class="copy">© 2022 SOUNDLOG.</p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>






<?php } else { ?>








<footer>
	<div class="l-footer">
		<div class="footer-logo">
			<section>
				<h1 class="f-logo"><a href="<?php echo esc_url (home_url()); ?>"><img src="<?php echo get_template_directory_uri()?>/img/common/logo.svg" alt="SOUNDLOG"></a></h1>
				<h2 class="f-txt">SOUNDLOG is a site that introduces music such as electronic music and club music.
				</h2>
			</section>
		</div>
		<div class="footer-link">
			<section>
				<!-- <h3 class="f-tit">Link</h3> -->
				<ul class="f-link">
					<li><a href="" class="link01">ABOUT</a></li>
					<li><a href="" class="link01">CONTACT</a></li>
				</ul>
			</section>
		</div>
		<p class="copy">© 2022 SOUNDLOG.</p>
	</div>
</footer>


<?php wp_footer(); ?>
</body>
</html>
<?php } ?>