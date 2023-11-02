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

namespace Index\Index;

use InertiaKotchasan\Inertia;
use Kotchasan\Date;
use Kotchasan\Http\Request;
use Kotchasan\Template;

/**
 * Render the index page.
 *
 * This method is responsible for rendering the index page of the Index module.
 */
class Controller extends \Kotchasan\Controller
{

    public function index(Request $request)
    {
        // รับค่าจาก $_GET['module'] ถ้าไม่มีการส่งค่ามาจะคืนค่า home โดยคืนค่าเป็น string ที่ตัวแปร module
        // method filter() กำหนดให้รับค่าเฉพาะตัวอักษรที่กำหนดเท่านั้น
        $module = $request->get('module', 'index')->filter('a-z');

        // ตรวจสอบว่ามี Controller ของหน้าที่เรียกหรือไม่
        // เช่น Index\Home\Controller สำหรับหน้า home
        // ถ้าไม่พบหน้าที่เรียกจะคืนค่า Index\Pagenotfound\Controller
        $class = 'Index\\' . ucfirst($module) . '\Controller';
        if (method_exists($class, 'execute')) {
            // โหลดหน้าที่เรียก
            $content = createClass($class);
        } else {
            // โหลดหน้า Pagenotfound เมื่อไม่พบหน้าที่เรียก
            $content = 'notfound';
        }
        // เริ่มต้นใช้งาน View

        $content->execute($request);
    }

    public function execute(Request $request)
    {
        Inertia::render('Welcome', [
            'canLogin' => true,
            'canRegister' => true,
        ]);
    }
}
