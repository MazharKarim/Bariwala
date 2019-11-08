<div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">

          </a>
          <a href="{{url('/admin')}}" class="simple-text logo-normal">
            Owner
          </a>
        </div>
        <ul class="nav">
          <li class="{{ (request()->is('admin')) ? 'active' : '' }}">
            <a href="{{url('/admin')}}">
              <!-- <i class="tim-icons icon-chart-pie-36"></i> -->
              <p>Dashboard</p>
            </a>
          </li>
          <li class="{{ (request()->is('unitDetails')) ? 'active' : '' }}">
            <a href="{{url('/unitDetails')}}">
              <!-- <i class="tim-icons icon-atom"></i> -->
              <p>Unit Details</p>
            </a>
          </li>
          <li class="{{ (request()->is('addUser')) ? 'active' : '' }}">
            <a href="{{url('/addUser')}}">
              <!-- <i class="tim-icons icon-atom"></i> -->
              <p>Add User</p>
            </a>
          </li>
          <li class="{{ (request()->is('memberList')) ? 'active' : '' }}">
            <a href="{{url('/memberList')}}">
              <!-- <i class="tim-icons icon-pin"></i> -->
              <p>Residents</p>
            </a>
          </li>
          <li class="{{ (request()->is('bills')) ? 'active' : '' }}">
            <a href="{{url('/bills')}}">
              <!-- <i class="tim-icons icon-bell-55"></i> -->
              <p>Bills</p>
            </a>
          </li>
          <li class="{{ (request()->is('payment')) ? 'active' : '' }}">
            <a href="{{url('/payment')}}">
              <!-- <i class="tim-icons icon-single-02"></i> -->
              <p>Payment</p>
            </a>
          </li>
          <li class="{{ (request()->is('complains')) ? 'active' : '' }}">
            <a href="{{url('/complains')}}">
              <!-- <i class="tim-icons icon-puzzle-10"></i> -->
              <p>Complains</p>
            </a>
          </li>
          <li class="{{ (request()->is('notice')) ? 'active' : '' }}">
            <a href="{{url('/notice')}}">
              <!-- <i class="tim-icons icon-align-center"></i> -->
              <p>Notice</p>
            </a>
          </li>
          <li class="{{ (request()->is('helpLine')) ? 'active' : '' }}">
            <a href="{{url('/helpLine')}}">
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