
<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>
<script src="jquery.min.js"></script>
<script>
			$(document).ready(function(){
				 $("#getUID").load("arduino/UIDContainer.php");
				setInterval(function() {
					$("#getUID").load("arduino/UIDContainer.php");
				}, 500);
			});
            function clearVariable() {
            $.ajax({
                url: "http://192.168.254.116/appsDev-main/arduino/getUID.php", // Replace with the actual path to your server-side script
                type: 'POST',
                data: { clearVariable: true },
                success: function(data) {
                    // Update the UI with the new value (cleared value) returned from the server
                    $('#uidResult').text(data);
                },
                error: function() {

                }
            });
        }
		</script>

<?php
include '../database/database-connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have an RFID input from the form
    $input_rfid = $_POST['rfid'];

    // Using prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT name FROM teacher WHERE rfid = ?");
    $stmt->bind_param("s", $input_rfid);
    $stmt->execute();
    $stmt->bind_result($name);

    // Fetch the result
    if ($stmt->fetch()) {
        $result_message = "The name corresponding to RFID $input_rfid is: $name";
    } else {
        $result_message = "No record found for RFID $input_rfid";
    }

}



?>
<dialog id="dialog" class="dialog">
 <div class="dialog-handler">
  <div class="close-button" onclick="clearVariable()">
   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="close-svg">
    <path d="M18 6 6 18" />
    <path d="m6 6 12 12" />
   </svg>
  </div>
  <div class="mid-content">
   <span>Please Tap your ID for access.</span>
  </div>
  <div class="bottom-content">
  <form class="formSaRFID" method="post" action="">
  <div type="text" name="rfid" id="getUID" rows="1" cols="1" required></div>
    <button type="submit" value="Login" class="submits">
     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="submits-svg">
      <path d="M5 12h14" />
      <path d="m12 5 7 7-7 7" />

     </svg>
    </button>
   </form>
  </div>
 </div>
</dialog>
<dialog id="timer-dialog" class="timer-dialog">
 <div class="timer-dialog-handler">
 <div class="close-button2" onclick="clearVariable()">
   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="close-svg">
    <path d="M18 6 6 18" />
    <path d="m6 6 12 12" />
   </svg>
  </div>
  <div class="timer-dialog-top">
   <div class="name-container">
    <div class="name-text"><span>NAME</span></div>
    <?php if (isset($result_message)) { ?>
        <div class="name-value"><?php echo $result_message; ?></div>
    <?php } ?>
   </div>
  </div>
  <div class="timer-dialog-mid">
   <div class="teacher-container">
    <div class="teacher-text">
     <span>CLASSROOM</span>
    </div>
    <div class="teacher-value"></div>
   </div>
  </div>
  <div class="timer-dialog-bottom">
   <select id="timeSelect" class="timeSelect">
    <option value="60">60 minutes</option>
    <option value="30">30 minutes</option>
    <option value="90">1 hour and 30 minutes</option>
   </select>
   <button class="send" id="startButton" onclick="clearVariable()">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="submit-timer">
     <path d="M5 12h14" />
     <path d="m12 5 7 7-7 7" />
    </svg>
   </button>
  </div>
 </div>
 </div>
</dialog>

<style>
            .formSaRFID{
                display: flex;
                align-items: center;
                justify-content: space-around;
                column-gap: 20px;
            }
            #getUID{
                width: 200;
                padding: 10px;
                border: none;
                background-color: transparent;
                color: #676775;
                font-size: 20px;
                font-family: 'Courier New', Courier, monospace;
                font-weight: 600;
            }
            .submits{
                margin-bottom: 20px !important ;
            }

            .close-button2{
                position: fixed;
                right: 20px;
                top: 20px;
            }

        </style>
        