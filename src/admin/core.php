<?php
$action = $_POST['action'];

require_once 'function.php';

switch ($action) {
    case 'initHot':
        initHot();
        break;
    case 'initCold':
        initCold();
        break;
    case 'selectOneGoods':
        selectOneGoods();
        break;
    case 'updateGoods':
        updateGoods();
        break;
        // case 'newGoods':
        //     newGoods();
        //     break;
        // case 'deleteGoods';
        //     deleteGoods();
        //     break;
        // case 'loadGods';
        //     loadGods();
        //     break;
}
