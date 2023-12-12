<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
<?php include 'help.php';?>

<div class="modal">
 <div class="div-container">
  <div class="modal-content">
   <a>
   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rotate-cw"><path d="M21 12a9 9 0 1 1-9-9c2.52 0 4.93 1 6.74 2.74L21 8"/><path d="M21 3v5h-5"/>
  </svg>
   </a>
  <span>Reload</span></div>
  <div class="modal-content">
   <a>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" x2="21" y1="14" y2="3"/></svg>
   </a>
   <span>About</span></div>
  <div class="modal-content">
   <a>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" x2="21" y1="14" y2="3"/></svg>
   </a>
   <span>FAQs</span></div>
  <div class="modal-content">
   <a>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" x2="21" y1="14" y2="3"/></svg>
   </a>
   <span>Project Team</span></div>
 </div>
</div>

<style>

 .modal{
  display:none;
  position: fixed;
  right: 250px;
  bottom: 85px;
  width: 175px;
  height: 186px;
  background-color: #181818;
  border-radius: .5em;
  color:#fbfbfb;
  padding: 5px 0;
  box-sizing: border-box;
 }
 .modals{
  display:block;
  position: fixed;
  right: 230px;
  bottom: 55px;
  width: 175px;
  height: 186px;
  background-color: #181818;
  border-radius: .5em;
  color:#fbfbfb;
  padding: 5px 0;
  box-sizing: border-box;
 }
 .div-container{
  display: flex;
  flex-direction: column;
  align-items: center;
  height: 100%;
  width: 100%;
  
 }
 .modal-content{
  width: 100%;
  height: 100%;
  font-size:.875rem;
  font-family: 'Assistant', sans-serif;
  text-align: center;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  column-gap: 10px;
  padding-left: 15px;
  box-sizing: border-box;
  cursor:pointer;
 }
 span{
  text-align: left;
  width: 130px;
  font-weight: 500;
 }
 a{
  display: flex;
  align-items: center;
  justify-content: center;
 }

 .modal-content:hover{
  background-color: #2f2f38;
 }
</style>

<script>
 const helpBtn = document.querySelector('.help');
 const modal = document.querySelector('.modal');

helpBtn.addEventListener('click', () => {
 modal.classList.toggle('modals');
});
</script>
</body>
</html>