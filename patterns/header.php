<?php
/**
 * Title: Header
 * Slug: vt/header
 * Categories: header
 */
$logo = esc_url( get_theme_file_uri('assets/images/7df9066ff4821ca6b885933fde2359573eb00275.png') );
?>

<!-- wp:group {"tagName":"header","className":"site-header w-full text-white border-b border-white/10"} -->
<header class="wp-block-group site-header w-full text-white">
  <!-- wp:group {"className":"site-header-inner mx-auto max-w-[1728px] px-[24px] md:px-[53px] flex items-center justify-between"} -->
  <div class="wp-block-group site-header-inner mx-auto max-w-[1728px] px-[24px] md:px-[53px] flex items-center justify-between">

    <!-- wp:image {"sizeSlug":"full","linkDestination":"home","className":"site-logo"} -->
    <figure class="wp-block-image size-full site-logo">
      <a href="/"><img src="<?php echo $logo; ?>" alt="VentureTech Solutions"></a>
    </figure>
    <!-- /wp:image -->

    <!-- wp:navigation {"overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"left"},"className":"header-nav"} -->
      <!-- wp:navigation-link {"label":"IT Specialties","url":"#"} /-->
      <!-- wp:navigation-link {"label":"Digital Marketing","url":"#"} /-->
      <!-- wp:navigation-link {"label":"Career Opportunities","url":"#"} /-->
    <!-- /wp:navigation -->

  </div>
  <!-- /wp:group -->
</header>
<!-- /wp:group -->