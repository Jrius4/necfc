<div class="swipe-menu default-theme">
    <div class="logo">
        <a href="/"><img width="175px" height="75px" src="/img/Ndebi Tech Logo.png" alt="logo"/></a>
    </div>
    <div class="codehim-search-trigger"></div>
    <div class="codehim-search">
       <form  class="form-inline my-2 my-lg-0"  action="{{ route('blog') }}">
          <input class="search-text form-control mr-sm-2" placeholder="Type to search..." autocomplete="on" value="{{ request('term') }}" name="term" type="text" />
          <button class="search-now btn btn-success" name="submit" type="submit" disabled="true"> Search </button>
       </form>
       <div class="back-arrow"></div>
    </div>
    <!--//codehim-search-->
    <!--Navigation Icon-->
    <div class="nav-icon">
       <span></span>
       <span></span>
       <span></span>
    </div>
    <nav class="codehim-nav">
       <div class="tab-container">
          <span class="tab-name tab-name1-active"> My Projects</span>
          <span class="tab-name"> Tutorials  </span>
       </div>
       <!--//Tab Container-->
       <div class="tab tab-active">
          <ul class="menu-item">
             <li> <a href="#1"> Website Templates </a> </li>
             <li class="has-sub">
                <span class="dropdown-heading"> Jquery Projects</span> <!--Do not add any link in li that has sub items // Use span for dropdown heading-->
                <ul>
                   <li><a href="#2"> Sub Item 1</a> </li>
                   <li> <a href="#2"> Sub Item 2 </a> </li>
                   <li> <a href="#2"> Sub Item 3 </a> </li>
                   <li> <a href="#2"> Sub Item 4 </a> </li>
                </ul>
             </li>
             <li> <a href="#1"> Recommended </a> </li>
             <li> <a href="#1"> Top Ten</a> </li>
          </ul>
          <ul class="my-codehim">
             <li> <a class="help" href="#1"> Help & Feedback </a> </li>
             <li> <a class="updates" href="#1"> Subscribe Me</a> </li>
             <li> <a class="request" href="#1"> Request for Code</a></li>
          </ul>
          <div class="social">
            
             <div class="facebook"></div>
             <div class="twitter"></div>
             <div class="gplus"> </div>
          </div>
          <!--//social-->
       </div>
       <!--//Tab-->
       <div class="tab">
          <ul class="menu-item">
             <li> <a href="#1"> Latest Updates </a> </li>
             <li> <a href="#1"> How to Coding </a> </li>
             <li class="has-sub">
                <span class="dropdown-heading"> Designing Tutorials</span>
                <ul>
                   <li><a href="#2"> Sub Item 1</a> </li>
                   <li> <a href="#2"> Sub Item 2 </a> </li>
                   <li> <a href="#2"> Sub Item 3 </a> </li>
                   <li> <a href="#2"> Sub Item 4 </a> </li>
                   <li> <a href="#2"> Sub Item 5 </a> </li>
                </ul>
             </li>
             <li class="has-sub">
                <span class="dropdown-heading"> Development Tutorials</span>
                <ul>
                   <li><a href="#2"> Sub Item 1</a> </li>
                   <li> <a href="#2"> Sub Item 2 </a> </li>
                   <li> <a href="#2"> Sub Item 3 </a> </li>
                </ul>
             </li>
             <li> <a href="#1"> Most Recently</a> </li>
          </ul>
       </div>
       <!--//Tab-->
    </nav>
 </div>
 {{-- <div class="dim-overlay"> </div> --}}