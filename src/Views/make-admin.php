

<div class="w-25 mx-auto">
  <form action="" method="POST">
      <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" name="username" class="form-control" id="username">
      </div>
      <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="password">
      </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
    </div>  
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>




<?php require __DIR__."../../../Components/Footer.php"; ?>