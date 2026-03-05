<?php
/**
 * Title: Footer
 * Slug: vt/footer
 * Categories: footer
 */
$logo = esc_url( get_theme_file_uri('assets/images/7df9066ff4821ca6b885933fde2359573eb00275.png') );
?>

<!-- wp:group {"tagName":"footer","className":"site-footer w-full text-white border-t border-white/10"} -->
<footer class="wp-block-group site-footer w-full text-white">
  <!-- wp:group {"className":"mx-auto max-w-[1728px] px-[24px] md:px-[53px] py-10 text-center"} -->
  <div class="wp-block-group mx-auto max-w-[1728px] px-[24px] md:px-[53px] py-10 text-center">

    <!-- wp:image {"sizeSlug":"full","className":"footer-logo"} -->
    <figure class="wp-block-image size-full footer-logo">
      <img src="<?php echo $logo; ?>" alt="Venture Tech Solutions">
    </figure>
    <!-- /wp:image -->

    <!-- wp:spacer {"height":"22px"} -->
    <div style="height:22px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:paragraph {"className":"text-sm text-white/80"} -->
    <p class="text-sm text-white/80">5787 West Sunrise Blvd, Plantation, FL 33313</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"className":"text-sm text-white/80"} -->
    <p class="text-sm text-white/80"><a href="mailto:info@venturetechsolutions.com">info@venturetechsolutions.com</a></p>
    <!-- /wp:paragraph -->

    <!-- wp:spacer {"height":"14px"} -->
    <div style="height:14px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","justifyContent":"center"},"className":"footer-links"} -->
      <!-- wp:navigation-link {"label":"Privacy","url":"#"} /-->
      <!-- wp:navigation-link {"label":"Terms of Use","url":"#"} /-->
      <!-- wp:navigation-link {"label":"Accessibility","url":"#"} /-->
    <!-- /wp:navigation -->

    <!-- wp:spacer {"height":"14px"} -->
    <div style="height:14px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:paragraph {"className":"text-sm text-white/80"} -->
    <p class="text-sm text-white/80">
      For information on Machine Readable Files, please click on the Wellnet link
      <a href="https://wellnet.com/" target="_blank" rel="noopener">https://wellnet.com/</a>
    </p>
    <!-- /wp:paragraph -->

    <!-- wp:spacer {"height":"18px"} -->
    <div style="height:18px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:paragraph {"className":"text-xs text-white/70"} -->
    <p class="text-xs text-white/70">© 2026 Venture Tech Solutions, LLC</p>
    <!-- /wp:paragraph -->

  </div>
  <!-- /wp:group -->
</footer>
<!-- /wp:group -->