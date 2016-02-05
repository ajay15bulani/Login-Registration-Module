<?php

function Connect_DB()
{
    $db_host="localhost";
    //$db_user="telecoma_user";
    $db_user="root";
    //$db_password="telecoma_user";
    $db_password="14227542";
    $db_name="telecoma_webportal";
    if(@$db_link=mysqli_connect($db_host,$db_user,$db_password,$db_name))
    {
        //Connected Successfully;
        return $db_link;
    }

    else
    {
        die("Connection Error");
    }

}

?>