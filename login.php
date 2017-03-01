<?php
    require_once 'library.php';
    ////เปลี่ยนเป็นหน้าแรก
  ///  if(chkLogin()){
      //  header("Location: home.php");
//    }
?>



<form class="form-inline">
  <div class="form-group">
    <label class="sr-only" for="InputEmail3">Email address</label>
    <input type="text" class="form-control" id="InputEmail3" placeholder="Username">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
  <div class="form-group">
    <U><h6><a href="register.php">ลงทะเบียนเกษตรกร</a></h6>
    <U><h6><a href="forgotpassword.php">ลืมรหัสผ่าน</a></h6>
  </div>
</form>
