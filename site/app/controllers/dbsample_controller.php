<?php
class DbsampleController extends Controller
{
    public function index()
    {
        $db = Db::factory();
        $smt = $db->query('SELECT * FROM cart');
        foreach($rows as $row) {
            echo $row['id'] . PHP_EOL;
            echo $row['comment'] . PHP_EOL;
        }
        exit;
    }
}
