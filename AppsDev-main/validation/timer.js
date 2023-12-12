// <!-- Other HTML content remains unchanged -->
// <!--
// <button class="classroom" id="classroom1" data-status="1">Classroom 1</button>
// <button class="classroom" id="classroom2" data-status="2">Classroom 2</button>
// <button class="classroom" id="classroom3" data-status="3">Classroom 3</button>
// <button class="classroom" id="classroom4" data-status="4">Classroom 4</button>

// <select id="timeSelect">
//  <option value="60">60 seconds</option>
//  <option value="30">30 seconds</option>
// </select>

// <button id="startButton">Start Countdown</button> -->
var timers = {};
var selectedClassroom = null;

document.querySelectorAll(".green").forEach(function (button) {
  button.addEventListener("click", function () {
    selectedClassroom = this.getAttribute("data-status");
  });
});

document.getElementById("startButton").addEventListener("click", function () {
  if (selectedClassroom !== null) {
    var selectedTime = parseInt(document.getElementById("timeSelect").value);
    startCountdown(selectedClassroom, selectedTime);
    selectedClassroom = null; // Reset selected classroom after starting countdown
  }
});

function startCountdown(classroomStatus, selectedTime) {
  clearInterval(timers[classroomStatus]); // Clear previous timer if any
  updateDisplayTime(classroomStatus, selectedTime);
  timers[classroomStatus] = setInterval(function () {
    selectedTime--;
    updateDisplayTime(classroomStatus, selectedTime);

    if (selectedTime <= 0) {
      clearInterval(timers[classroomStatus]);
      hideCountdown(classroomStatus);
      changeButtonColor(classroomStatus);
    }
  }, 1000);
}

function updateDisplayTime(classroomStatus, time) {
  var classroomButton = document.getElementById(`classroom${classroomStatus}`);
  var currentText = classroomButton.innerText;
  var classroomName = currentText.split("(")[0].trim(); // Extracting the classroom name
  classroomButton.innerText = `${classroomName} (${formatTime(time)})`;
}

function formatTime(seconds) {
  const minutes = Math.floor(seconds / 60);
  const remainingSeconds = seconds % 60;
  return `${minutes}:${remainingSeconds < 10 ? "0" : ""}${remainingSeconds}`;
}

function hideCountdown(classroomStatus) {
  var classroomButton = document.getElementById(`classroom${classroomStatus}`);
  var currentText = classroomButton.innerText;
  var classroomName = currentText.split("(")[0].trim(); // Extracting the classroom name
  classroomButton.innerText = classroomName; // Resetting to the original classroom name
}

function changeButtonColor(classroomStatus) {
  var classroomButton = document.getElementById(`classroom${classroomStatus}`);
  classroomButton.style.backgroundColor = "#2b8a3e";
}

function startCountdown(classroomStatus, selectedTime) {
  clearInterval(timers[classroomStatus]); // Clear previous timer if any
  updateDisplayTime(classroomStatus, selectedTime);
  changeButtonColor(classroomStatus, "#c92a2a"); // Change color to red when countdown starts
  timers[classroomStatus] = setInterval(function () {
    selectedTime--;
    updateDisplayTime(classroomStatus, selectedTime);

    if (selectedTime <= 0) {
      clearInterval(timers[classroomStatus]);
      hideCountdown(classroomStatus);
      changeButtonColor(classroomStatus, "#2b8a3e"); // Change color to green when countdown ends
    }
  }, 1000);
}

function changeButtonColor(classroomStatus, color) {
  var classroomButton = document.getElementById(`classroom${classroomStatus}`);
  classroomButton.style.backgroundColor = color;
}
