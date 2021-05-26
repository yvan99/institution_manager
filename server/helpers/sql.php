<?php
require_once '../init.php';
function select($data, $table, $condition)
{
    $conn = db();
    $selector = mysqli_query($conn, "SELECT" . " " . $data . " " . "FROM" . " " . $table . " " . "WHERE" . " " . $condition);
    return $selector;
}

function selectI($data, $table, $condition)
{
    $conn = db();
    $selector = mysqli_query($conn, "SELECT" . " " . $data . " " . "FROM" . " " . $table . " " . "WHERE" . " " . $condition);
    $fetcher = mysqli_fetch_array($selector);
    return $fetcher;
}


function insert($table, $tableStructure, $values)
{
    $conn = db();
    $selector = mysqli_query($conn, "INSERT INTO " . $table . " (" . $tableStructure . ") VALUES (" . $values . ")")
        or die(mysqli_error($conn));
    return $selector;
}

function delete($table, $condition)
{
    $conn = db();
    $selector = mysqli_query($conn, "DELETE FROM " . $table . " WHERE " . $condition);
    return $selector;
}

function update($table, $column, $condition)
{
    $conn = db();
    $selector = mysqli_query($conn, "UPDATE  " . $table . " SET " . $column . " WHERE " . $condition);
    return $selector;
}
