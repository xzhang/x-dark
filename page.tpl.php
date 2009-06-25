<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>

<body class="<?php print $body_classes; ?> show-grid1">

  <div id="site-header" class="container-16">
           
    <div id="branding" class="grid-4">
      <?php if ($linked_logo_img): ?>
        <span id="logo" class="grid-1 alpha"><?php print $linked_logo_img; ?></span>
      <?php endif; ?>
      <?php if ($linked_site_name): ?>
        <h1 id="site-name" class="grid-3 <?php print $linked_logo_img ? 'omega' : 'alpha'; ?>"><?php print $linked_site_name; ?></h1>
      <?php endif; ?>
      <?php if ($site_slogan): ?>
        <div id="site-slogan" class="grid-3 omega"><?php print $site_slogan; ?></div>
      <?php endif; ?>
    </div>
   
    <div id="secondary-links" class="grid-12">
      <?php print $secondary_menu_links; ?>
    </div>
    <div class="clear-block"></div>
   
    <div id="primary-links" class="grid-12">
      <?php print $main_menu_links; ?>
    </div>
   
    <div class="clear-block"></div>
  </div>

  <div id="site-body" class="container-16">
    <div id="main" class="grid-12">
      <?php if ($tabs): ?>
        <div id="tabs">
        <?php print $tabs; ?>
        </div>
      <?php endif; ?>
      
      <?php if ($title): ?>
        <h2 id="page-title">
        <?php print $title; ?>
        </h2>
      <?php endif; ?>
      
      <?php if ($messages): ?>
        <div id="messages">
        <?php print $messages; ?>
        </div>
      <?php endif; ?>
      
      <div id="content">
        <?php print $content; ?>
      </div>
    </div>  
    
    <div id="search-box" class="grid-4">
      <?php print $search_box; ?>
    </div>
    
    <?php if ($right): ?>
    <div id="right" class="grid-4">
      <?php print $right; ?>
    </div>
    <?php endif; ?>
    
    <div class="clear-block"></div>
  </div>
  
  <div id="site-footer" class="prefix-1 suffix-1">
    <?php if ($footer): ?>
      <div id="footer-region" class="region grid-14 clear-block">
        <?php print $footer; ?>
      </div>
    <?php endif; ?>

    <?php if ($footer_message): ?>
      <div id="footer-message" class="grid-14">
        <?php print $footer_message; ?>
      </div>
    <?php endif; ?>
  </div>


  </div>
  <?php print $closure; ?>
</body>
</html>
