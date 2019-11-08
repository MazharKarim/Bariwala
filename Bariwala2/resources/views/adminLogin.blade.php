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

                <div class="card-footer" href="{{url('/admin')}}">
                  <button type="submit" class="btn btn-fill btn-primary">Log In</button>
                
                </div>




                <?php


$host="localhost";
$user="root";
$password="";
$db="bariwala_db";
 
mysql_connect($host,$user,$password);
mysql_select_db($db);
 
if(isset($_POST['email'])){
    
    $uname=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="select * from users where user='".$uname."' AND Pass='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>