

<div class="w-25 mx-auto">
    <form action="login" method ="POST">
    <div class="mb-3">
        <label for="username" class="form-label">username</label>
        <input type="text" name="username" class="form-control" id="username">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">password</label>
        <input type="password" name="password" class="form-control" id="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>  
  
<?php require __DIR__."../../../Components/Footer.php"; ?>