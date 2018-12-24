<?php
/**
 * @author John Chew
 * @license GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * CCExtractor Footer
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) {
    die();
}

?>

<nav id="topNav" class="navbar fixed-top navbar-toggleable-sm navbar-dark">
    <label>
        <input type="checkbox">
        <div class="btn menu">
            <span class="hamburger"></span>
        </div>
        <ul>
            <li class="nav-item">
                <?php tpl_link(wl('about'), hsc("ABOUT"), 'title="About | CCExtractor" class="nav-link"'); ?>
            </li>
            <li class="nav-item">
                <?php tpl_link(wl('download'), hsc("DOWNLOAD"), 'title="Documentation | CCExtractor" class="nav-link"'); ?>
            </li>
            <li class="nav-item">
                <?php tpl_link(wl('documentation'), hsc("DOCUMENTATION"), 'title="Documentation | CCExtractor" class="nav-link"'); ?>
            </li>
        </ul>
    </label>
    <div class="navbar-brand">
        <?php
        // Get logo either out of the template images folder or data/media folder
        $logoSize = array();
        $logo = tpl_getMediaFile(array('images/ccx_logotext_light.png' , 'images/logo.png', 'images/ccextractor_logotype.png' ), false, $logoSize);
        // Display logo in a link to the home page
        tpl_link(
                wl(),
                '<img src="'.$logo.'" '.$logoSize[1].' alt="" />'
                );
        ?>
    </div>
</nav>
