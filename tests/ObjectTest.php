<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once __DIR__ . '/../src/Object.php';

    $server = 'mysql:host=localhost;dbname=burritos_test';
    $usercourse_name = 'root';
    $password = 'root';
    $DB = new PDO($server, $usercourse_name, $password);

    class ObjectTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Object::deleteAll();
        }

        function test_methodToTest_inputDescription()
        {
            // Arrange

            // Act

            // Assert
        }
    }
 ?>
