<?php 
/**
 * PHP5 POO
 * 
 * @autor Grionis
 * 
*/
define("HOST","localhost");
define("PASS","root");
define("DB_SELECTED","name_db");

class Connection
{

public function EnabledCon()
{


if(mysql_connect(HOST,PASS) or die (mysql_error()))
{ 
//if failed conexion, show alert
 if(mysql_select_db(DB_SELECTED) or die(mysql_error()))
 { 
 //if the DB no exist, show alert 
 }

}

 //end function
 }


 //end class
 }

 class Test
 {
  private $sql;
  private $con;


 public function TestSql()
 {
  $con = new Connection();
  $con->EnabledCon();


 $sql = "
         SELECT id_user 
         FROM Name_table
         
        ";
 $result = mysql_query($sql);
 
 if(!mysql_num_rows($result) == 0 or die(mysql_error()))
 {
  
  echo "test succefully";

  }
  else{ echo "Failed test query "; }
 
 //end function
 }
 //End Class
 }

//Test Query
$testQuery = new Test();
$testQuery->TestSql();

//end Test

?>


