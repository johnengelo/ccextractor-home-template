<?php
/**
 * =============================
 *
 * CCExtractor DokuWiki Template
 * @author John Chew
 * @link https://github.com/johnengelo/ccextractor-dokuwiki
 * @license CC BY-SA 3.0
 *
 * =============================
 */


/* Must be run from within DokuWiki */
if (!defined('DOKU_INC')) {
    die();
}

header('X-UA-Compatible: IE=edge,chrome=1');

$hasSidebar = page_findnearest($conf['sidebar']);
$showSidebar = $hasSidebar && ($ACT == 'show');

?>

<!DOCTYPE html>
<html lang="<?php echo $conf['lang']?>">

<head>

    <meta charset="UTF-8" />

    <!-- [ Page Title ] -->
    <title><?php echo strip_tags($conf['title']) ?> :: <?php tpl_pagetitle(); ?></title>
    <script>(function (H) {
        H.className = H.className.replace(/\bno-js\b/, 'js')
    })(document.documentElement)</script>
    <meta name="viewport" content="width=device-width"/>
    <?php echo tpl_favicon(array('favicon', 'mobile')); ?>

    <?php tpl_includeFile('meta.html') ?>

    <?php tpl_metaheaders() ?>

    <!-- [ Must be run after tpl_metaheaders() due to difference in jQuery versions ] -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- CCExtractor DokuWiki CSS Stylesheet -->
    <link href="<?php echo tpl_getMediaFile(array("css/mainstyle.less")); ?>" rel="stylesheet/less" type="text/css">

    <!-- Main site-wide JS -->
    <script type="text/javascript" src="script.js"></script>
    <!-- Less.js CSS Support / Compiler -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js"></script>

</head>

<body role="document">
    <?php
        // Functions Library
        require_once('conf/tpl_template_ccextractor.php');
        // Header File
        include('tpl_header.php');
    ?>
    <div id="dokuwiki__top" class="dokuwiki">
        <!-- [Hero Section] -->
        <div class="skewed-bg jumbotron bg-dark hero" style="margin-bottom: 0px; border-radius: 0;">
            <div class="container content">
                <div class="hero-text ml-auto mr-auto pl-3 pr-3 pt-5 mt-3">
                    <h1 style="font-size: 4rem;">Extracting Subtitles Has Never Been This Easy!</h1>
                    <span class="grid-item-divider grid-item-divider-left" style="right: 47.5%;"></span>
                    <p style="font-size: 1.5rem;">
                        With CCExtractor, subtitle extraction is just a breeze!
                    </p>
                </div>
                <div class="download-text col ml-auto mr-auto pl-3 pr-3 pt-5">
                    <h3>Download now!</h3>
                    <button class="btn btn-lg download-button"><i class="fas fa-download">&ensp;</i>Download</button>
                    <p>
                        Current version: 0.87
                    </p>
                </div>
                <div class="center-mouse mt-5 pt-5">
                  <div class="mouse-scroll"></div>
                </div>
            </div>
        </div>

        <div class="jumbotron features mt-5">
            <h1 class="why-ccx mb-2">Why use CCExtractor?</h1>
            <span class="grid-item-divider grid-item-divider-left"></span>
            <div class="mt-2">
                <ul class="feature-list" style="list-style-type: none; display: flex; justify-content: center;">
                    <li class="col-4 pt-3 mt-3">
                        <i class="feature-icons far fa-smile-wink" style="font-size: 3rem"></i>
                        <h2>Easy to Use</h2>
                        <p>
                            It's very easy to use. Just tell it what file to process and it does everything for you!
                        </p>
                    </li>
                    <li class="col-4 pt-3 mt-3">
                        <i class="feature-icons fas fa-lock-open" style="font-size: 3rem"></i>
                        <h2>Open Source</h2>
                        <p>
                            CCExtractor is a free and open source software. Everyone can download, view and access its code from GitHub.
                        </p>
                    </li>
                    <li class="col-4 pt-3 mt-3">
                        <i class="feature-icons far fa-calendar-check" style="font-size: 3rem"></i>
                        <h2>Constantly Updated</h2>
                        <p>
                            A lot of contributors from around the world constantly work to make sure the software is efficient and bug-free!
                        </p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="jumbotron" id="maincontent_bg" style="display: none; border-radius: 0.25em;">
            <div class="container" id="main-content">
                <!-- [ Message Area ] -->
                <?php html_msgarea() ?>

                <!-- [ Main Page Content - Start ] -->
                <?php tpl_content($prependTOC = false) ?>
                <!-- [ Main Content - End] -->
            </div>
        </div>

    </div>

    <div class="no" style="display: none;">
        <?php tpl_indexerWebBug() ?>
    </div>
    <div id="screen__mode" class="no"></div>

    <!-- Particle JS for hero section -->
    <script src="particles.js"></script>

</body>

</html>
