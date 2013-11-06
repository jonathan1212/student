<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>

    <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>

    <style type="text/css" id="twentythirteen-header-css">
        .site-header {
            background: url(http://mywordpress.local/wp-content/themes/twentythirteen/images/headers/circle.png) no-repeat scroll top;
            background-size: 1600px auto;
        }
        .site-title,
        .site-description {
            color: #e8b65a;
        }
    </style>

    <style type="text/css" media="print">#wpadminbar { display:none; }</style>

  </head>

    <body id="home blog logged-in admin-bar no-customize-support single-author">
        <div id="page" class="hfeed site">

            <?php echo $sf_content ?>
        
        <!-- FOOTER -->
        </div>
  </body>
</html>
