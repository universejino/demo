<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <a href="" class="brand-link">
   <img src="{!! asset('dist/img/logo.png') !!}" alt="Arunachala College Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
   <span class="brand-text font-weight-light">Arunachala College</span>
   </a>
     <div class="sidebar">
   <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
            <img src="{!! asset('upload/users')!!}/{{auth()->user()->profile_photo}}" class="img-circle elevation-2" alt="User Image">
         </div>
         <div class="info">
            <a href="#" class="d-block">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</a>
         </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="{{url('/dashboard')}}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
               </a>
            </li>
            <li class="nav-item">
            <a href="{{url('/donors')}}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p> Manage Donors</p>
               </a>
            </li>
		  
		  
          
           <li class="nav-item has-treeview  ">
            <a href="" class="nav-link ">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Manage Bloods
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-blood.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Blood</p>
                </a>
              </li>
              <li class="nav-item">
			    <a href="view-bloods.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Bloods</p>
                </a>
              </li>
            </ul>
          </li>
         <li class="nav-item has-treeview  ">
            <a href="" class="nav-link ">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Manage Matching
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-matching.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Matching</p>
                </a>
              </li>
              <li class="nav-item">
          <a href="matching.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Matching</p>
                </a>
              </li>
            </ul>
          </li>     
		  <li class="nav-item">
            <a href="citys.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Manage Citys
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview  ">

            <a href="" class="nav-link ">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Manage Postarea
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-postarea.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Postarea</p>
                </a>
              </li>
              <li class="nav-item">
          <a href="postarea.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Postarea</p>
                </a>
              </li>
            </ul>
          </li>  
		   <li class="nav-item has-treeview  ">
            <a href="" class="nav-link ">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Manage Events
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-event.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Event</p>
                </a>
              </li>
              <li class="nav-item">
          <a href="events.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Events</p>
                </a>
              </li>
            </ul>
          </li>  
		  
		  <li class="nav-item has-treeview  ">
            <a href="" class="nav-link ">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Manage Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-user.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add user</p>
                </a>
              </li>
              <li class="nav-item">
          <a href="contact.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Contact</p>
                </a>
              </li>
			  <li class="nav-item">
          <a href="members.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Members</p>
                </a>
              </li>
			  <li class="nav-item">
          <a href="users.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View users</p>
                </a>
              </li>
            </ul>
          </li>  
          <li class="nav-item">
            <a href="backup.php" class="nav-link ">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Backup Database
              </p>
            </a>
          </li>
             
	  
          <li class="nav-item has-treeview  ">
            <a href="" class="nav-link ">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Kumari Rajendran                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                              <li class="nav-item">
                <a href="profile.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
                
              <li class="nav-item">
                <a href="password.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="https://remotedesktop.google.com/support/" target="_blank" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Screen Share</p>
                </a>
              </li>
              <li class="nav-item">
			    <a href="logout.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  
  
  
  
   