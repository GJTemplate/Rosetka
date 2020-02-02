<?php
/**
 * @package    Joomla.Site
 * @subpackage Template.Rosetka
 *
 * @author     oleg <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

require_once JPATH_THEMES . '/' . $this->template . '/helper.php';

tplRosetkaHelper::loadCss();
tplRosetkaHelper::loadJs();
tplRosetkaHelper::setMetadata();

?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>


    <jdoc:include type="head"/>
	<?php
	# Расположение слоя
	# /templates/rosetka/html/layouts/blocks/header.php
	// echo JLayoutHelper::render('sprite.svg');
	?>
    <svg style="display: none;">
        <defs id="symbols"></defs>
    </svg>
    <script>
        loadSprite("/templates/rosetka/assets/img/icons/sprite.svg")
        function loadSprite (e) {
            var t = new XMLHttpRequest;
            t.open('GET', e, !0), t.onload = function () {
                t.readyState === t.DONE && 200 === t.status && function (e) {
                    for (var t = (new DOMParser).parseFromString(e, 'text/xml').getElementsByTagName('symbol'), n = 0; n < t.length; n++) {
                        var o = t.item(n).cloneNode(!0);
                        document.getElementById('symbols').appendChild(o);
                    }
                }(t.responseText);
            }, t.send();
        }
    </script>

</head>
<?php
//$app = JFactory::getApplication() ;
//$app->enqueueMessage('Redirect to another page was successful', 'success');


?>
<body class="<?php echo tplRosetkaHelper::setBodySuffix(); ?>">
    <div class="wrapper central-wrapper">
        <?php
        # Расположение слоя
        # /templates/rosetka/html/layouts/blocks/header.php
        echo JLayoutHelper::render('blocks.header');
        ?>
        <jdoc:include type="message" />
    </div>



<?php echo tplRosetkaHelper::setAnalytics(0, 'your-analytics-id'); ?>

<a href="#main" class="sr-only sr-only-focusable"><?php echo Text::_('TPL_ROSETKA_SKIP_LINK_LABEL'); ?></a>

<a href="<?php echo $this->baseurl; ?>/">
    <?php if ($this->params->get('sitedescription')) : ?>
        <?php echo '<div class="site-description">' . htmlspecialchars($this->params->get('sitedescription'), ENT_COMPAT, 'UTF-8') . '</div>'; ?>
    <?php endif; ?>
</a>

<nav role="navigation">
    <jdoc:include type="modules" name="position-0" style="none"/>
</nav>

<main id="main">

    <jdoc:include type="component"/>
</main>

<aside>
    <?php if ($this->countModules('position-1')) : ?>
        <jdoc:include type="modules" name="position-1" style="none"/>
    <?php endif; ?>
</aside>

<Rosetkater>
    <jdoc:include type="modules" name="Rosetkater" style="none"/>
    <p>
        &copy; <?php echo date('Y'); ?> <?php echo tplRosetkaHelper::getSitename(); ?>
    </p>
</Rosetkater>
<jdoc:include type="modules" name="debug" style="none"/>
</body>
</html>
