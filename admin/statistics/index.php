<?php
require_once '../../core/db/boot.php';

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // $staff = get_all_staff();

    include_once './view/statistics/_index.php';
}