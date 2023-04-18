                <?php
                  session_start()
                  // $_SESSION['recipients'] = $_POST['recipients']; 
                  // $_SESSION['message'] = $_POST['message'];
                    // // Connect to database
                    // require_once 'dbconn.php';

                    // // Retrieve data from database
                    // $sql = "SELECT Phone FROM residents";
                    // $result = $conn->query($sql);

                    // $data = array();

                    //   if ($result->num_rows > 0) {
                    //       // Output data of each row
                    //       while($row = $result->fetch_assoc()) {
                    //       $data =  $row["Phone"]; 
                    //       echo $data. " ";

                    //       }
                    //     }
               

                  ?>

        <form class="form-control" id="send" method="POST" action="send.php">
                  <label>Recipients: </label>
                  <input type="tel" name="recipients" id="recipients" value=""><br>
                  <label style="margin-right: 1%;">Message:</label><br>
                  <textarea name="message" id="message"></textarea>
                  <!-- <input type="text" name="message" id="message" style="max-height: 50%;"> -->
                  <div style="text-align: right; margin-right: 5% ;">
                    <input type="submit" name="submitmes" style="border-radius: 5px;" value="send">   
                  </div>
              </form>