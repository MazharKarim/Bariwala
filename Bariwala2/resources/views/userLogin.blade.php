                <form>
                  <div class="row">
                    <div class="col-md-12">
                      <label>User Type</label>
                      <div class="select">
                        <select id='gMonth1'>
                            <option value=''>--Select User Type--</option>
                            <option value='Owner'>Owner</option>
                            <option value='Tenant'>Tenant</option>
                        </select> 
                      </div>
                    </div>
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username">
                      </div>
                    </div>
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                      </div>
                    </div>

                  </div>
                </form>

                <div class="card-footer" href="{{url('/user')}}">
                  <button type="submit" class="btn btn-fill btn-primary">Log In</button>
                
                </div>