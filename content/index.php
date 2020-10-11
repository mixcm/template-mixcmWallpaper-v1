<!DOCTYPE html>
<html>
<?php get_require_function("content-function"); ?>
<head>
    <?php do_html_head(""); ?>
    <?php echo get_static_css ("bootstrap-material-design.min"); ?>
    <?php echo get_static_css ("i"); ?>
</head>

<body>
    <div id="header">
        <?php get_require_content("header");?>
    </div><!-- #header -->

    <div id="content">
        <div class="container">
            <?php get_require_content("content-list");?>
        </div>
    </div><!-- #content -->

    <div id="footer">
        <script data-no-instant src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script data-no-instant src="https://cdn.bootcss.com/instantclick/3.0.1/instantclick.js"></script>
        <script data-no-instant>InstantClick.init();</script>
        <?php echo get_static_js("bootstrap-material-design.min"); ?>
        <?php echo get_static_js("i"); ?>
    </div>

</body>

</html>