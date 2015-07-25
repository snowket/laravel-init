<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a style="float:left" class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span> Home Page</a>
            <!--  <a  style = "float:right" href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
          -->  </div>


        <div class="navbar-collapse collapse">

                <ul class="nav navbar-nav navbar-right">

                    <li><a href="{{'person'}}">All User</a></li>
                    <li><a href="{{url('pupils')}}">Pupils</a></li>
                    <li><a href="{{url('Teachers')}}">Teachers</a></li>
                    <li><a href="{{url('classes')}}">Classes</a></li>
                    <li><a href="evaluate.php">Marks </a></li>             <!-- ??????????  - evaluate -->
                    <li><a href="subjects.php">Subjects</a></li>
                    <li><a href="{{action('PersonController@show',Auth::user()->id)}}">Profile</a></li>
                    <li>
                        @if(Auth::check())
                        <!-- <input type="submit" id="logout"  name="logout" class="btn marg10 btn-link" style="margin-top:10;" value="????????"> -->
                        <a type="submit" id="logout" name="logout" class="btn marg10 btn-link" href="{{url('logout')}}">
                            <span class="glyphicon glyphicon-log-out"></span> Log Out</a>
                        @else
                            <button type="submit" id="LogIn" name="Login" class="btn marg10 btn-link" style="margin-top:10;">
                                <span class="glyphicon glyphicon-log-out"></span> Log In</button>
                            @endif

                    </li>
                </ul>

        </div>

        <!--/.nav-collapse -->
    </div>
</div>