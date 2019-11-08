<div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            
          </a>
          <a href="{{url('/user')}}" class="simple-text logo-normal">
            Tenant
          </a>
        </div>
        <ul class="nav">
          <li class="{{ (request()->is('user')) ? 'active' : '' }}">
            <a href="{{url('/user')}}">
              <!-- <i class="tim-icons icon-chart-pie-36"></i> -->
              <p>Dashboard</p>
            </a>
          </li>
          <!-- <li class="{{ (request()->is('user/addInformation')) ? 'active' : '' }}">
            <a href="{{url('/addInformation')}}"> -->
              <!-- <i class="tim-icons icon-atom"></i> -->
              <!-- <p>Add Information</p>
            </a>
          </li>
          <li class="{{ (request()->is('user/members')) ? 'active' : '' }}">
            <a href="{{url('/user/members')}}"> -->
              <!-- <i class="tim-icons icon-pin"></i> -->
              <!-- <p>Members</p>
            </a>
          </li> -->
          <li class="{{ (request()->is('user/bills')) ? 'active' : '' }}">
            <a href="{{url('/user/bills')}}">
              <!-- <i class="tim-icons icon-bell-55"></i> -->
              <p>Bills</p>
            </a>
          </li>
          <li class="{{ (request()->is('user/payment')) ? 'active' : '' }}">
            <a href="{{url('/user/payment')}}">
              <!-- <i class="tim-icons icon-single-02"></i> -->
              <p>Payment</p>
            </a>
          </li>
          <li class="{{ (request()->is('user/complains')) ? 'active' : '' }}">
            <a href="{{url('/user/complains')}}">
              <!-- <i class="tim-icons icon-puzzle-10"></i> -->
              <p>Complains</p>
            </a>
          </li>
          <li class="{{ (request()->is('user/notice')) ? 'active' : '' }}">
            <a href="{{url('/user/notice')}}">
              <!-- <i class="tim-icons icon-align-center"></i> -->
              <p>Notice</p>
            </a>
          </li>
          <li class="{{ (request()->is('user/helpLine')) ? 'active' : '' }}">
            <a href="{{url('/user/helpLine')}}">
              <!-- <i class="tim-icons icon-world"></i> -->
              <p>Help Lines</p>
            </a>
          </li>
          <!-- <li class="active-pro">
            <a href="./upgrade.html">
              <i class="tim-icons icon-spaceship"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li> -->
        </ul>
      </div>
    </div>