    <div class="br-logo"><a href=""><span>[</span>CONTEST <i></i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="{{url('admin/dashboard')}}" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

           <li class="br-menu-item mt-2">
          <a href="#" class="br-menu-link with-sub">
            <i class="fa fa-users"></i>
            <span class="menu-item-label">All USERS</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('allUser')}}" class="sub-link">All Users</a></li>
    
          </ul>
        </li>
    
        <li class="br-menu-item mt-2">
          <a href="#" class="br-menu-link with-sub">
            <i class="fa fa-list-alt"></i>
            <span class="menu-item-label">ALL TOPICS CATEGORY</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('topic.index')}}" class="sub-link">All Topics Category</a></li>
    
          </ul>
        </li>

           <li class="br-menu-item mt-2">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">CONTSEST</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('contest.index')}}" class="sub-link">All Contest</a></li>
    
          </ul>
        </li>

          <li class="br-menu-item mt-2">
          <a href="#" class="br-menu-link with-sub">
            <i class="fa fa-users"></i>
            <span class="menu-item-label">CONTEST PARTICIPATES</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('contest.result')}}" class="sub-link">All Participates</a></li>
    
          </ul>
        </li>
    
        <li class="br-menu-item mt-2">
          <a href="#" class="br-menu-link with-sub">
            <i class="fa fa-trophy"></i>
            <span class="menu-item-label">CONTEST WINNERS</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('all-winner')}}" class="sub-link">All Winners</a></li>
    
          </ul>
        </li>   

       <li class="br-menu-item mt-2">
          <a href="#" class="br-menu-link with-sub">
          <i class="fas fa-bell"></i>
            <span class="menu-item-label">CONTEST NOTICE</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('contest-notice')}}" class="sub-link">All Contest Notice</a></li>
    
          </ul>
        </li>

        <li class="br-menu-item mt-2">
          <a href="#" class="br-menu-link with-sub">
          <i class="fas fa-reply-all"></i>
            <span class="menu-item-label">USER MESSAGES</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{route('all-contact')}}" class="sub-link">All Contact Info</a></li>
    
          </ul>
        </li>
    

      </ul><!-- br-sideleft-menu -->

      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Information Summary</label>


      <br>
    </div><!-- br-sideleft -->