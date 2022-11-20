<?php
include "db_connect.php";
$update_id = $_POST['update_id'];

$sql = "select * FROM updates WHERE id='".$update_id."'";

    $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
           echo '
           <input type="hidden" value="'.$update_id.'" id="upid"/>
            <div class="col-sm-6">
            
              <div class="form-group">
                  <label>Select Update Type</label>
                  <select class="form-control" id="uptype" name="uptype" required >
                  <option value="School Event">School Event</option>
                  <option value="News">News</option>
                  </select>
              </div>
          </div>
            <div class="form-group row">
              <label for="inputEmail" class="col-sm-2 col-form-label">Tittle</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="uptittle" name="uptittle" placeholder="Activity / Event Tittle" required value="'.$row['tittle'].'">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail" class="col-sm-2 col-form-label">Details</label>
              <div class="col-sm-10">
                  <textarea class="form-control" rows="10" name="updetails" id="updetails" placeholder="Activity / Event Details"  required>
                  '.$row['details'].'
                  </textarea>
                
              </div>
        
            </div>
            </div>

           
           
           
           
            ';
        }
        } else {
        echo "0 results";
        }
        $conn->close();
