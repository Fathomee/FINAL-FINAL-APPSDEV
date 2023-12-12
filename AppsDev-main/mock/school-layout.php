<?php include 'functions/get-color-classroom.php';?>
<div class="top-view">
 <div class="layout-container">
  <div class="layout">
   <div class="col1">
    <div class="row1">
     <div class="stairs-classroom" style="border:none;">
     </div>
     <div class="stairs-side">
      <div class="stairs-step1">
      </div>
      <div class="stairs-step2">
      </div>
     </div>
    </div>
    <div class="row2">
     <div class="main-col1">
      <div class="main-classrooms1" style="border:none">
       <div class="main-classroom">
        <button <?php echo getColor(0);?> disabled>Faculty Room</button>
       </div>
       <div class="main-classroom">
        <button <?php echo getColor(0);?> disabled>Principals Office</button>
       </div>
       <div class="main-classroom">
        <button <?php echo getColor(0);?> disabled>Accounting Office</button>
       </div>
      </div>
      <div class="main-classrooms2">
       <div class="main-classroom">
        <button <?php echo getColor(3);?>>IT Department</button>
       </div>
       <div class="main-classroom">
        <button <?php echo getColor(2);?>>BSIT I</button>
       </div>
       <div class="main-classroom">
        <button <?php echo getColor(1);?>>BSEntrep I</button>
       </div>
      </div>
     </div>
     <div class="main-col2"></div>
    </div>
    <div class="row3">
     <div class="stairs-classroom2" style="border:none;">
     </div>
     <div class="stairs-side2">
      <div class="stairs-step1a">
      </div>
      <div class="stairs-step2b">
      </div>
     </div>
    </div>
   </div>
   <div class="col2">
    <div class="rowb1">
     <div class="side-classrooms">
      <div class="side-classroom">
       <button <?php echo getColor(4);?>>BPED I</button>
      </div>
      <div class="side-classroom">
       <button <?php echo getColor(5);?>>BEED I</button>
      </div>
      <div class="side-classroom">
       <button <?php echo getColor(6);?>>BSED I</button>
      </div>
     </div>
     <div class="side-alley">
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
<div class="input">
 <button class="value" id="btn3rdFloor">
  3rd Floor
 </button>
 <button class="value" id="btn2ndFloor">
  2nd Floor
 </button>
 <button class="value" id="btn1stFloor" autofocus>
  1st Floor
 </button>
</div>

<script>
const topView = document.querySelector(".top-view");
const btn2ndFloor = document.getElementById("btn2ndFloor");
const btn3rdFloor = document.getElementById("btn3rdFloor");
const btn1stFloor = document.getElementById("btn1stFloor");


btn2ndFloor.click();

btn2ndFloor.addEventListener("click", () => {
 topView.innerHTML = `
    <div class="layout-container"> 
      <div class="layout">
        <div class="col1">
          <div class="row1">
            <div class="stairs-classroom">
            <button <?php echo getColor(13);?>>Music Department</button>
            </div>
            <div class="stairs-side">
              <div class="stairs-step1">
              </div>
              <div class="stairs-step2">
              </div>
            </div>
          </div>
          <div class="row2">
            <div class="main-col1">
              <div class="main-classrooms1">
                <div class="main-classroom">
                  <button <?php echo getColor(12);?>>SHS I</button>
                </div>
                <div class="main-classroom">
                  <button <?php echo getColor(11);?>>SHS II</button>
                </div>
                <div class="main-classroom">
                <button <?php echo getColor(0);?> disabled>Registrar's Office</button>
                </div>
              </div>
              <div class="main-classrooms2">
                <div class="main-classroom">
                  <button <?php echo getColor(10);?>>STEM II</button>
                </div>
                <div class="main-classroom">
                  <button <?php echo getColor(9);?>>HUMMS II</button>
                </div>
                <div class="main-classroom">
                  <button <?php echo getColor(8);?>>ABM II</button>
                </div>
              </div>
            </div>
            <div class="main-col2"></div>
          </div>
          <div class="row3">
            <div class="stairs-classroom2">
              <button <?php echo getColor(7);?>>Computer Lab I</button>
            </div>
            <div class="stairs-side2">
              <div class="stairs-step1a">
              </div>
              <div class="stairs-step2b">
              </div>
            </div>
          </div>
        </div>
        <div class="col2">
          <div class="rowb1">
            <div class="side-classrooms">
              <div class="side-classroom">
                <button <?php echo getColor(14);?>>STEM I</button>
              </div>
              <div class="side-classroom">
                <button <?php echo getColor(15);?>>HUMMS I</button>
              </div>
              <div class="side-classroom">
                <button <?php echo getColor(16);?>>ABM I</button>
              </div>
            </div>
            <div class="side-alley">
            </div>
          </div>
        </div>
      </div>
    </div>
      `;
});

btn3rdFloor.addEventListener("click", () => {
 topView.innerHTML = ` 

  <div class="layout-container"> 
    <div class="layout">
      <div class="col1">
        <div class="row1">
          <div class="stairs-classroom">
            <button <?php echo getColor(23);?>>BSEntrep</button>
          </div>
          <div class="stairs-side">
            <div class="stairs-step1">
            </div>
            <div class="stairs-step2">
            </div>
          </div>
        </div>
        <div class="row2">
          <div class="main-col1">
            <div class="main-classrooms1">
              <div class="main-classroom">
                <button <?php echo getColor(22);?>>BEED</button>
              </div>
              <div class="main-classroom">
                <button <?php echo getColor(21);?>>BPED</button>
              </div>
              <div class="main-classroom">
                <button <?php echo getColor(20);?>>BSED</button>
              </div>
            </div>
            <div class="main-classrooms2">
              <div class="main-classroom">
              <button <?php echo getColor(19);?>>TVL Room</button>
              </div>
              <div class="main-classroom">
              </div>
              <div class="main-classroom">
                <button <?php echo getColor(18);?>>Computer Laboratory</button>
              </div>
            </div>
          </div>
          <div class="main-col2"></div>
        </div>
        <div class="row3">
          <div class="stairs-classroom2">
            <button <?php echo getColor(17);?>>Lecture Room</button>
          </div>
          <div class="stairs-side2">
            <div class="stairs-step1a">
            </div>
            <div class="stairs-step2b">
            </div>
          </div>
        </div>
      </div>
      <div class="col2">
        <div class="rowb1">
        </div>
      </div>
    </div>
  </div>

      `;
});

btn1stFloor.addEventListener("click", () => {
 topView.innerHTML = `
    <div class="layout-container"> 
      <div class="layout">
        <div class="col1">
          <div class="row1">
            <div class="stairs-classroom" style="border:none;">
            </div>
            <div class="stairs-side">
              <div class="stairs-step1">
              </div>
              <div class="stairs-step2">
              </div>
            </div>
          </div>
          <div class="row2">
            <div class="main-col1">
              <div class="main-classrooms1" style="border:none">
                <div class="main-classroom">
                <button <?php echo getColor(0);?> disabled>Faculty Room</button>
                </div>
                <div class="main-classroom">
                <button <?php echo getColor(0);?> disabled>Principal's Office</button>
                </div>
                <div class="main-classroom">
                <button <?php echo getColor(0);?> disabled>Accounting Office</button>
                </div>
              </div>
              <div class="main-classrooms2">
                <div class="main-classroom">
                  <button <?php echo getColor(4);?>>IT Department</button>
                </div>
                <div class="main-classroom">
                  <button <?php echo getColor(5);?>>BSIT I</button>
                </div>
                <div class="main-classroom">
                  <button <?php echo getColor(6);?>>BSEntrep I</button>
                </div>
              </div>
            </div>
            <div class="main-col2"></div>
          </div>
          <div class="row3">
            <div class="stairs-classroom2" style="border:none;">
            </div>
            <div class="stairs-side2">
              <div class="stairs-step1a">
              </div>
              <div class="stairs-step2b">
              </div>
            </div>
          </div>
        </div>
        <div class="col2">
          <div class="rowb1">
            <div class="side-classrooms">
              <div class="side-classroom">
                <button <?php echo getColor(7);?>>BPED I</button>
              </div>
              <div class="side-classroom">
                <button <?php echo getColor(8);?>>BEED I</button>
              </div>
              <div class="side-classroom">
                <button <?php echo getColor(9);?>>BSED I</button>
              </div>
            </div>
            <div class="side-alley">
            </div>
          </div>
        </div>
      </div>
    </div>
      `;
});
</script>