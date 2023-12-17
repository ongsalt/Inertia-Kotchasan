<?php
/**
 * @filesource modules/index/controllers/index.php
 *
 * Controller for the Index module.
 * This class handles the default actions for the Index module, including rendering the index page.
 * For more information, please visit: https://www.kotchasan.com/
 *
 * @copyright 2016 Goragod.com
 * @license https://www.kotchasan.com/license/
 * @author Goragod Wiriya <admin@goragod.com>
 */

namespace Index\Test;

use Kotchasan\Http\Request;
use Kotchasan\Template;
use InertiaKotchasan\Inertia;

/**
 * Render the index page.
 *
 * This method is responsible for rendering the index page of the Index module.
 */
class Controller extends \Kotchasan\Controller
{

    /**
     * Render the index page.
     *
     * This method is responsible for rendering the index page of the Index module.
     *
     * @param Request $request The HTTP request object.
     */
    public function execute(Request $request)
    {
        Inertia::render('Page2');
    }
}
