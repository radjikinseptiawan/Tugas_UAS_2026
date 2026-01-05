<?php 

include("./config/db.php");

class DataUsed extends DataConnector{

    public function select(){
        $conn = $this->connect();

        $sql = "SELECT * FROM landing_page_settings";
        $results = mysqli_query($conn,$sql);

        if($results && mysqli_num_rows($results) > 0){
            return $results->fetch_assoc();
        }

        return null;
    }

    public function update($data) {
        $conn = $this->connect();
        
        $sql = "UPDATE landing_page_settings SET 
                company_name = ?, hero_title = ?, hero_desc = ?, 
                btn_primary = ?, btn_secondary = ?, about_title = ?, 
                about_p1 = ?, contact_email = ?, contact_phone = ?, 
                contact_address = ? WHERE id = 1";
        
        $stmt = $conn->prepare($sql);
        
        $stmt->bind_param("ssssssssss", 
            $data['company_name'], $data['hero_title'], $data['hero_desc'],
            $data['btn_primary'], $data['btn_secondary'], $data['about_title'],
            $data['about_p1'], $data['contact_email'], $data['contact_phone'],
            $data['contact_address']
        );
        
        return $stmt->execute();
    }
}


// $data = new DataUsed();
// print_r($data->select());