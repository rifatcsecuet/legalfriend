<div class="profile-sidebar">
    <div class="widget-profile pro-widget-content">
        <div class="profile-info-widget">
            <a href="#" class="booking-doc-img">
              <div class="profile-img">
                  
                    <!-- profile pic code  -->

                    @if($data->profile_image == "default.png")
                    <img src="{{ asset('public/default/default.png') }}">                  
                       @else
                    <img src="{{ asset('storage') }}/{{ $data->profile_image}}" alt="User Image">
                  @endif
                   


               </div>
            </a>
            <div class="profile-det-info">
                <h3>{{Auth::user()->name}}</h3>

                <div class="patient-details">
                    <h5 class="mb-0">  </h5>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-widget">
        <nav class="dashboard-menu">
            <ul>
                <li class="active">
                    <a href="{{route('lawyer.dashboard')}}">
                        <i class="fas fa-columns"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fas fa-calendar-check"></i>
                        <span>My Profile</span>
                    </a>
                </li>

                <li>
                <a href="{{ route('lawyer.lawyerProfileSeetings') }}">
                        <i class="fas fa-user-cog"></i>
                        <span>Profile Settings</span>
                    </a>
                </li>

                <li>
                    <a href=" {{ route('password.change') }} ">
                        <i class="fas fa-lock"></i>
                        <span>Change Password</span>
                    </a>
                </li>
                <li>
                <a href="{{ route('logout') }}">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
