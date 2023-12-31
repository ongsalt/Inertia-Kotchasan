<?php

namespace Kotchasan\Database;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2017-03-26 at 13:14:27.
 */
class PdoMysqlDriverTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PdoMysqlDriver
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new PdoMysqlDriver();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * Generated from @assert (array('update' => '`user`', 'where' => '`id` = 1', 'set' => array('`id` = 1', "`email` = 'admin@localhost'"))) [==] "UPDATE `user` SET `id` = 1, `email` = 'admin@localhost' WHERE `id` = 1".
     *
     * @covers Kotchasan\Database\PdoMysqlDriver::makeQuery
     */
    public function testMakeQuery()
    {

        $this->assertEquals(
            "UPDATE `user` SET `id` = 1, `email` = 'admin@localhost' WHERE `id` = 1", $this->object->makeQuery(array('update' => '`user`', 'where' => '`id` = 1', 'set' => array('`id` = 1', "`email` = 'admin@localhost'")))
        );
    }

    /**
     * Generated from @assert (array('insert' => '`user`', 'keys' => array('id' => ':id', 'email' => ':email'))) [==] "INSERT INTO `user` (`id`, `email`) VALUES (:id, :email)".
     *
     * @covers Kotchasan\Database\PdoMysqlDriver::makeQuery
     */
    public function testMakeQuery2()
    {

        $this->assertEquals(
            "INSERT INTO `user` (`id`, `email`) VALUES (:id, :email)", $this->object->makeQuery(array('insert' => '`user`', 'keys' => array('id' => ':id', 'email' => ':email')))
        );
    }

    /**
     * Generated from @assert (array('insert' => '`user`', 'keys' => array('id' => ':id'), 'orupdate' => array('`id`=VALUES(`id`)'))) [==] "INSERT INTO `user` (`id`) VALUES (:id) ON DUPLICATE KEY UPDATE `id`=VALUES(`id`)".
     *
     * @covers Kotchasan\Database\PdoMysqlDriver::makeQuery
     */
    public function testMakeQuery3()
    {

        $this->assertEquals(
            "INSERT INTO `user` (`id`) VALUES (:id) ON DUPLICATE KEY UPDATE `id`=VALUES(`id`)", $this->object->makeQuery(array('insert' => '`user`', 'keys' => array('id' => ':id'), 'orupdate' => array('`id`=VALUES(`id`)')))
        );
    }

    /**
     * Generated from @assert (array('select'=>'*', 'from'=>'`user`','where'=>'`id` = 1', 'order' => '`id`', 'start' => 1, 'limit' => 10, 'join' => array(" INNER JOIN ..."))) [==] "SELECT * FROM `user` INNER JOIN ... WHERE `id` = 1 ORDER BY `id` LIMIT 1,10".
     *
     * @covers Kotchasan\Database\PdoMysqlDriver::makeQuery
     */
    public function testMakeQuery4()
    {

        $this->assertEquals(
            "SELECT * FROM `user` INNER JOIN ... WHERE `id` = 1 ORDER BY `id` LIMIT 1,10", $this->object->makeQuery(array('select' => '*', 'from' => '`user`', 'where' => '`id` = 1', 'order' => '`id`', 'start' => 1, 'limit' => 10, 'join' => array(" INNER JOIN ...")))
        );
    }

    /**
     * Generated from @assert (array('select'=>'*', 'from'=>'`user`','where'=>'`id` = 1', 'order' => '`id`', 'start' => 1, 'limit' => 10, 'group' => '`id`')) [==] "SELECT * FROM `user` WHERE `id` = 1 GROUP BY `id` ORDER BY `id` LIMIT 1,10".
     *
     * @covers Kotchasan\Database\PdoMysqlDriver::makeQuery
     */
    public function testMakeQuery5()
    {

        $this->assertEquals(
            "SELECT * FROM `user` WHERE `id` = 1 GROUP BY `id` ORDER BY `id` LIMIT 1,10", $this->object->makeQuery(array('select' => '*', 'from' => '`user`', 'where' => '`id` = 1', 'order' => '`id`', 'start' => 1, 'limit' => 10, 'group' => '`id`'))
        );
    }

    /**
     * Generated from @assert (array('delete' => '`user`', 'where' => '`id` = 1')) [==] "DELETE FROM `user` WHERE `id` = 1".
     *
     * @covers Kotchasan\Database\PdoMysqlDriver::makeQuery
     */
    public function testMakeQuery6()
    {

        $this->assertEquals(
            "DELETE FROM `user` WHERE `id` = 1", $this->object->makeQuery(array('delete' => '`user`', 'where' => '`id` = 1'))
        );
    }
}