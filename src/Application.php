<?php
/**
 * Created by PhpStorm.
 * User: grodrigues
 * Date: 11/06/19
 * Time: 10:27
 */

namespace App;

use Slim\App;

class Application extends App
{
    public function __construct($container = [])
    {
        parent::__construct($container);
    }

    public function setUp()
    {
        $app = $this;

        require_once '../config/routes.php';
        require_once '../config/containers.php';

        return $this;
    }

}
