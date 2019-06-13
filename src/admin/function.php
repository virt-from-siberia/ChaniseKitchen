<?php

$servername = "localhost";
$username = "virtyoz777_aleks";
$password = "%O5HhBc5";
$dbname = "virtyoz777_aleks";


function connect()
{
    $conn = mysqli_connect("localhost", "virtyoz777_aleks", "%O5HhBc5", "virtyoz777_aleks");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // mysqli_set_charset($conn, "utf8");
    return $conn;
}

function initHot()
{
    //вывожу список товаров
    $conn = connect();
    $sql = "SELECT *  FROM goods WHERE category = 'hot' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}


function initCold()
{
    //вывожу список товаров
    $conn = connect();
    $sql = "SELECT *  FROM goods WHERE category = 'cold' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function initPizza()
{
    //вывожу список товаров
    $conn = connect();
    $sql = "SELECT *  FROM goods WHERE category = 'pizza' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function initDrink()
{
    //вывожу список товаров
    $conn = connect();
    $sql = "SELECT *  FROM goods WHERE category = 'drink' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function initWok()
{
    //вывожу список товаров
    $conn = connect();
    $sql = "SELECT *  FROM goods WHERE category = 'wok' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function initBurger()
{
    //вывожу список товаров
    $conn = connect();
    $sql = "SELECT *  FROM goods WHERE category = 'burger' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function initKebab()
{
    //вывожу список товаров
    $conn = connect();
    $sql = "SELECT *  FROM goods WHERE category = 'kebab' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function selectOneGoods()
{
    //вывожу список товаров
    $conn = connect();
    $id =  $_POST['gid'];
    $sql = "SELECT *  FROM goods WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function updateGoods()
{
    $conn = connect();

    $id = $_POST['gid'];
    $name = $_POST['gname'];
    $gcost = $_POST['gcost'];
    $gdescr = $_POST['gdescr'];
    $gwight = $_POST['gwight'];
    $gimg = $_POST['gimg'];


    $sql = "UPDATE goods SET name = '$name', cost = $gcost, description = '$gdescr', weight = '$gwight', img = '$gimg'  WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        echo "1";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    // writeJSON();
}


function newGoods()
{
    $conn = connect();
    $name = $_POST['gname'];
    $gcost = $_POST['gcost'];
    $gdescr = $_POST['gdescr'];
    $gwight = $_POST['gwight'];
    $gimg = $_POST['gimg'];
    $gcategory = $_POST['gcategory'];



    $sql = "INSERT INTO goods (name, cost,  description, img, category, weight) VALUES ('$name', '$gcost', '$gdescr' , '$gimg' , '$gcategory', '$gwight')";
    if (mysqli_query($conn, $sql)) {
        echo "1";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    // writeJSON();
}

function loadCOLDGoods()
{
    $conn = connect();
    $sql = "SELECT *  FROM goods WHERE category = 'cold' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}


function loadHOTGoods()
{
    $conn = connect();
    $sql = "SELECT *  FROM goods WHERE category = 'hot' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function loadPIZZAGoods()
{
    $conn = connect();
    $sql = "SELECT *  FROM goods WHERE category = 'pizza' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}


function loadDRINKGoods()
{
    $conn = connect();
    $sql = "SELECT *  FROM goods WHERE category = 'drink' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function loadWOKGoods()
{
    $conn = connect();
    $sql = "SELECT *  FROM goods WHERE category = 'wok' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}


function loadBURGERGoods()
{
    $conn = connect();
    $sql = "SELECT *  FROM goods WHERE category = 'burger' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}


function loadKEBABGoods()
{
    $conn = connect();
    $sql = "SELECT *  FROM goods WHERE category = 'kebab' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function showMiniCart()
{
    $conn = connect();
    $sql = "SELECT *  FROM goods ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function showCart()
{
    $conn = connect();
    $sql = "SELECT *  FROM goods ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}


function deleteGoods()
{
    $conn = connect();
    $id = $_POST['id'];

    $sql = "DELETE FROM goods WHERE id='$id' ";

    if ($conn->query($sql) === TRUE) {
        echo "1";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
