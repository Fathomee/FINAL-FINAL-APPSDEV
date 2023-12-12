<style>
/* Style to initially hide the form */
#loginForm {
 display: none;
}
</style>


<div id="loginForm">
 <form action="03-time.php" method="post">
  <input type="password" id="password" name="password"><br><br>
  <input type="submit" value="Login">
 </form>
</div>

<script>
function showLoginForm() {
 var form = document.getElementById('loginForm');
 form.style.display = 'block';
}
</script>