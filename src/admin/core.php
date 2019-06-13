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
    case 'initPizza':
        initPizza();
        break;
    case 'initDrink':
        initDrink();
        break;
    case 'initWok':
        initWok();
        break;
    case 'initBurger':
        initBurger();
        break;
    case 'initKebab':
        initKebab();
        break;
    case 'selectOneGoods':
        selectOneGoods();
        break;
    case 'updateGoods':
        updateGoods();
        break;
    case 'newGoods':
        newGoods();
        break;
    case 'loadCOLDGoods':
        loadCOLDGoods();
        break;
    case 'loadHOTGoods':
        loadHOTGoods();
        break;
    case 'loadPIZZAGoods':
        loadPIZZAGoods();
        break;
    case 'loadDRINKGoods':
        loadDRINKGoods();
        break;
    case 'loadWOKGoods':
        loadWOKGoods();
        break;
    case 'loadBURGERGoods':
        loadBURGERGoods();
        break;
    case 'loadKEBABGoods':
        loadKEBABGoods();
        break;
    case 'showMiniCart':
        showMiniCart();
        break;
    case 'showCart':
        showCart();
        break;
    case 'deleteGoods';
        deleteGoods();
        break;
}
