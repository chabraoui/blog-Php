<div class="modal fade text-dark" id="loginDialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Log In</h5>
        <button class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- login From -->
        <form method="post" action="authentif.php">
          <div class="form-group">
            <label for="userName">Username</label>
            <input type="text" class="form-control" name="userName" placeholder="Enter your username">
          </div>
          <div class="form-group">
            <label for="passWord">Password</label>
            <input type="password" class="form-control" name="passWord" placeholder="Enter your password">
          </div>
          <input type="submit" value="Login" name="submitBtn" class="btn btn-block btn-brown">
        </form>
      </div>
    </div>
  </div>
</div>
