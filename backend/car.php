<?php
include('../connect.php');
class Car{
    private function connectDB(){
        $db = new DB();
        $connect_db = $db->connectDB();
        return $connect_db;
    }
   
    public function index($band,$model,$year){

        $filter = '';
        if($band!=''){
            $filter .= " and band = '$band' ";
        }else{
            $filter .= "";
        }

        if($model!=''){
            $filter .= " and model = '$model' ";
        }else{
            $filter .= "";
        }

        if($year!=''){
            $filter .= " and year = '$year' ";
        }else{
            $filter .= "";
        }
        
       
        // $sql = "SELECT * FROM cars where 1 and band like '%$band%' or model like '%$model%' or year like '%$year%' group by band,model order by year DESC";
        $sql = "SELECT * FROM cars where 1 $filter ";
        // echo $sql; die;
        $result = $this->connectDB()->query($sql);
        $data = '';
        // echo "car";
        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
                // echo "id: " . $row["id"]. " - band: " . $row["band"]. " " . $row["model"]. "<br>";
                $band = $row["band"];
                $model = $row["model"];
                $year = $row["year"];
                $price = $row["price"];

                $data .="<tr>
                            <td>$band</td>
                            <td>$model</td>
                            <td>$year</td>
                            <td>$price</td>
                        </tr>";
            }
            echo $data;
        } else {
            $data .="<tr>
                        <td colspan='4'>No data</td>
                    </tr>";
            echo $data;
        }
        
        // echo "Hello Car";
    }

    public function getBand(){
        $sql = "SELECT band FROM cars group by band";
        $result = $this->connectDB()->query($sql);

        if ($this->connectDB() -> connect_errno) {
            echo "Failed to connect to MySQL: " . $this->connectDB() -> connect_error;
            exit();
        }
        $data = '';
        $data .="<option value=''>Select Band</option>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                // echo "id: " . $row["id"]. " - band: " . $row["band"]. " " . $row["model"]. "<br>";
                $band = $row["band"];
                $data .="<option value='$band'>$band</option>";
            }
            echo $data;
        }
    }

    public function getModel($band){
        $sql = "SELECT model FROM cars where band = '$band' group by model";
        $result = $this->connectDB()->query($sql);
        // echo $sql;
        $data = '';
        $data .="<option value=''>Select Model</option>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                // echo "id: " . $row["id"]. " - band: " . $row["band"]. " " . $row["model"]. "<br>";
                $model = $row["model"];
                $data .="<option value='$model'>$model</option>";
            }
            echo $data;
        }
    }

    public function getYear($band,$model){
        $sql = "SELECT year FROM cars where band = '$band' and model = '$model' group by year";
        $result = $this->connectDB()->query($sql);
        $data = '';
        $data .="<option value=''>Select Year</option>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                // echo "id: " . $row["id"]. " - band: " . $row["band"]. " " . $row["model"]. "<br>";
                $year = $row["year"];
                $data .="<option value='$year'>$year</option>";
            }
            echo $data;
        }
    }
}


$action = $_POST['action'];
$band = null;
$model = null;
$year = null;

if(!empty($_POST['band'])){
    $band = $_POST['band'];
}

if(!empty($_POST['model'])){
    $model = $_POST['model'];
}

if(!empty($_POST['year'])){
    $year = $_POST['year'];
}


$car_obj = new Car();
if($action == 'getData'){
    $car_obj->index($band,$model,$year);
}

if($action == 'getBand'){
    $car_obj->getBand();
}

if($action == 'getModel'){
    $getModel_band = $_POST['getModel_band'];
    $car_obj->getModel($getModel_band);
   
}

if($action == 'getYear'){
    $getYear_band = $_POST['getYear_band'];
    $getYear_model = $_POST['getYear_model'];
    $car_obj->getYear($getYear_band,$getYear_model);
}
?>