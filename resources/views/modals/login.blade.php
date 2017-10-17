    <div id="loginModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 id="loginModalLabel" class="modal-title">Login</h5>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <form id="loginform" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="text" name="email" placeholder="Email Address" id="email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
              </div>
              <div class="form-group">
                <button type="submit" class="submit btn btn-primary btn-shadow btn-gradient">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>