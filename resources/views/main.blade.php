<!DOCTYPE html>
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon.ico">
    <title>Launch - HTML5 Crowdfunding Profile Template</title>

    <!-- Gobal CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!--Fonts-->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<header class="header">
    <div class="container">
        <div class="row">
{{--            <div class="goal-summary pull-left">
                <div class="backers">
                    <h3>5234</h3>
                    <span>backers</span>
                </div>
                <div class="funded">
                    <h3>$10,350</h3>
                    <span>raised out of $23,000</span>
                </div>
                <div class="time-left">
                    <h3>27</h3>
                    <span>days left to go</span>
                </div>
                <div class="reminder last">
                    <a href="#"><i class="fa fa-star"></i> REMIND ME</a>
                </div>
            </div>--}}
            <ul>
                @if (session('authError'))
                    <li>{{ session('authError') }}</li>
                @endif
{{--                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @dump($errors)
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif--}}
                @if (Auth::check())
                <li style="font-family: 'Open Sans', sans-serif; Color: #ffffff">You are logged in as {{ Auth::user()->name }} <a href="{{ route('logout') }}">Log out</a></li>
                    @else
                <li><a href="{{ route('login') }}">Log in</a></li>
                @endif
            </ul>
        </div>
    </div>
</header>
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="content col-md-8 col-sm-12 col-xs-12">
                <div class="section-block">
                    <div class="funding-meta">
                        <h1>LAUNCH INTO SUCCESS</h1>
                        <span class="type-meta"><i class="fa fa-user"></i> Jonathan Doe</span>
                        <span class="type-meta"><i class="fa fa-tag"></i> <a href="#">crowdfunding</a>, <a href="#">launch</a> </span>
                        <!--img src="assets/img/image-heartbeat.jpg" class="img-responsive" alt="launch HTML5 Crowdfunding"-->
{{--                        <div class="video-frame">
                            <iframe src="https://player.vimeo.com/video/67938315" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>--}}
                        <p>Launch will enable you be in run  your own crowdfunding campaign, and be in complete control from concept to crowdfunding to launch.</p>
                        <h2>$10,350</h2>
                        <span class="contribution">raised by <strong>5,234</strong> ready to launch</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                <span class="sr-only">45% Complete</span>
                            </div>
                        </div>
                        <span class="goal-progress"><strong>45%</strong> of $23,000 raised</span>
                    </div>
                    <span class="count-down"><strong>27</strong>Days to go.</span>
                    <a href="#" class="btn btn-launch">HELP LAUNCH</a>
                </div>
                <!--signup-->
                <div class="section-block signup">
                    <div class="sign-up-form">
                        <form>
                            <p>Sign up now for updates and a chance to win a free version of launch!</p>
                            <input class="signup-input" type="text" name="email" placeholder="Email Address"><button class="btn btn-signup" type="submit"><i class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
                <!--/signup-->
                <!--tabs-->
                <div class="section-block">
                    <div class="section-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#about" aria-controls="about" role="tab" data-toggle="tab">About</a></li>
                            <li role="presentation"><a href="#updates" aria-controls="updates" role="tab" data-toggle="tab">Updates</a></li>
                        </ul>
                    </div>
                </div>
                <!--/tabs-->
                <!--tab panes-->
                <div class="section-block">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="about">
                            <div class="about-information">
                                <h1 class="section-title">ABOUT LAUNCH</h1>
                                <p>Suspendisse luctus at massa sit amet bibendum. Cras commodo congue urna, vel dictum velit bibendum eget. Vestibulum quis risus euismod, facilisis lorem nec, dapibus leo. Quisque sodales eget dolor iaculis dapibus. Vivamus sit amet lacus ipsum. Nullam varius lobortis neque, et efficitur lacus. Quisque dictum tellus nec mi luctus imperdiet. Morbi vel aliquet velit, accumsan dapibus urna. Cras ligula orci, suscipit id eros non, rhoncus efficitur nisi.</p>
                                <p>Quisque fermentum blandit ex at commodo. Nulla facilisi. Pellentesque porttitor nisi tellus, at gravida mi interdum et. Nulla vestibulum imperdiet libero eget mattis. Vestibulum porttitor, nibh quis sagittis tincidunt, velit orci molestie magna, in congue tortor mauris sit amet eros. Nam dictum gravida tempus.</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="updates">
                            <div class="update-information">
                                <h1 class="section-title">UPDATES</h1>
                                <!--update items-->
                                <div class="update-post">
                                    <h4 class="update-title">We've started shipping!</h4>
                                    <span class="update-date">Posted 2 days ago</span>
                                    <p>Suspendisse luctus at massa sit amet bibendum. Cras commodo congue urna, vel dictum velit bibendum eget. Vestibulum quis risus euismod, facilisis lorem nec, dapibus leo. Quisque sodales eget dolor iaculis dapibus. Vivamus sit amet lacus ipsum. Nullam varius lobortis neque, et efficitur lacus. Quisque dictum tellus nec mi luctus imperdiet. Morbi vel aliquet velit, accumsan dapibus urna. Cras ligula orci, suscipit id eros non, rhoncus efficitur nisi.</p>
                                </div>
                                <div class="update-post">
                                    <h4 class="update-title">Launch begins manufacturing </h4>
                                    <span class="update-date">Posted 9 days ago</span>
                                    <p>Suspendisse luctus at massa sit amet bibendum. Cras commodo congue urna, vel dictum velit bibendum eget. Vestibulum quis risus euismod, facilisis lorem nec, dapibus leo. Quisque sodales eget dolor iaculis dapibus. Vivamus sit amet lacus ipsum. Nullam varius lobortis neque, et efficitur lacus. Quisque dictum tellus nec mi luctus imperdiet. Morbi vel aliquet velit, accumsan dapibus urna. Cras ligula orci, suscipit id eros non, rhoncus efficitur nisi.</p>
                                </div>
                                <div class="update-post">
                                    <h4 class="update-title">Designs have now been finalized</h4>
                                    <span class="update-date">Posted 17 days ago</span>
                                    <p>Suspendisse luctus at massa sit amet bibendum. Cras commodo congue urna, vel dictum velit bibendum eget. Vestibulum quis risus euismod, facilisis lorem nec, dapibus leo. Quisque sodales eget dolor iaculis dapibus. Vivamus sit amet lacus ipsum. Nullam varius lobortis neque, et efficitur lacus. Quisque dictum tellus nec mi luctus imperdiet. Morbi vel aliquet velit, accumsan dapibus urna. Cras ligula orci, suscipit id eros non, rhoncus efficitur nisi.</p>
                                </div>
                                <!--/update items-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/tabs-->
            <!--/main content-->
            <!--sidebar-->
            <div class="content col-md-4 col-sm-12 col-xs-12">
               {{-- <div class="section-block summary">
                    <h1 class="section-title">LAUNCH</h1>
                    <div class="profile-contents">
                        <h2 class="position">Sky Rocketing Your Funding Campaign</h2>
                        <img src="assets/img/profile-img.jpg" class="profile-image img responsive" alt="John Doe">
                        <!--social links-->
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-git"></i></a></li>
                        </ul>
                        <!--/social links-->
                        <a href="#" class="btn btn-contact"><i class="fa fa-envelope"></i>CONTACT US</a>
                    </div>
                </div>--}}
                <div class="section-block">
                    <h1 class="section-title">REWARDS</h1>
                    <!--reward blocks-->
                    <div class="reward-block">
                        <h3>$10</h3>
                        <h2>Early Bird</h2>
                        <p>Curabitur accumsan sem sed velit ultrices fermentum. Pellentesque rutrum mi nec ipsum elementum aliquet. Sed id vestibulum eros. Nullam nunc velit, viverra sed consequat ac, pulvinar in metus.</p>
                        <span><i class="fa fa-users"></i> 180 backers</span>
                        <a href="" class="btn btn-reward">GET THIS REWARD</a>
                    </div>
                    <div class="reward-block popular">
                        <h3>$20</h3>
                        <h2>Value Bird</h2>
                        <p>Curabitur accumsan sem sed velit ultrices fermentum. Pellentesque rutrum mi nec ipsum elementum aliquet. Sed id vestibulum eros. Nullam nunc velit, viverra sed consequat ac, pulvinar in metus.</p>
                        <span><i class="fa fa-users"></i> 320 backers</span>
                        <a href="" class="btn btn-reward">GET THIS REWARD</a>
                    </div>
                    <div class="reward-block">
                        <h3>$30</h3>
                        <h2>Super Bird</h2>
                        <p>Curabitur accumsan sem sed velit ultrices fermentum. Pellentesque rutrum mi nec ipsum elementum aliquet. Sed id vestibulum eros. Nullam nunc velit, viverra sed consequat ac, pulvinar in metus.</p>
                        <span><i class="fa fa-users"></i> 105 backers</span>
                        <a href="" class="btn btn-reward">GET THIS REWARD</a>
                    </div>
                    <div class="reward-block last">
                        <h3>$50</h3>
                        <h2>Premium Bird</h2>
                        <p>Curabitur accumsan sem sed velit ultrices fermentum. Pellentesque rutrum mi nec ipsum elementum aliquet. Sed id vestibulum eros. Nullam nunc velit, viverra sed consequat ac, pulvinar in metus.</p>
                        <span><i class="fa fa-users"></i> 64 backers</span>
                        <a href="" class="btn btn-reward">GET THIS REWARD</a>
                    </div>
                    <!--/reward blocks-->
                </div>
                <!--credits-->
                <div class="section-block">
                    <h1 class="section-title">CREDITS</h1>
                    <!--credits block-->
                    <div class="credit-block sources">
                        <ul class="list-unstyled">
                            <li><a href="http://getbootstrap.com/"><i class="fa fa-external-link"></i>Bootstrap</a></li>
                            <li><a href="http://fortawesome.github.io/Font-Awesome/"><i class="fa fa-external-link"></i>FontAwesome</a></li>
                            <li><a href="https://www.google.com/fonts"><i class="fa fa-external-link"></i>Google Fonts</a></li>
                            <li><a href="http://jquery.com/"><i class="fa fa-external-link"></i>jQuery</a></li>
                            <li><a href="https://vimeo.com/67938315"><i class="fa fa-external-link"></i>Vimeo Video</a></li>
                            <li><a href="http://uifaces.com/"><i class="fa fa-external-link"></i>Glasses Image</a></li>
                        </ul>
                    </div>
                    <div class="credit-block license">
                        <p>The Launch template was created by <a class="lined" href="http://themes.audaindesigns.com">Audain Designs</a> for use by anyone for <strong>FREE</strong> and is covered uner the <a class="lined" href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 License</a>.</p>
                        <p>As time goes on the template may receive updates, follow us on twitter to get notified when an update is released.</p>
                        <a href="http://twitter.com/audaindesigns" class="btn btn-follow"><i class="fa fa-twitter"></i>FOLLOW US</a>
                        <a href="#" class="btn btn-download"><i class="fa fa-download"></i>DOWNLOAD TEMPLATE</a>
                    </div>
                    <!--/credits block-->
                </div>
                <!--/credits-->
            </div>
            <!--/sidebar-->
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="row">
            <!--This template has been created under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using this template in your own project, thank you.-->
            <span class="copyright">Created by <a href="http://themes.audaindesigns.com" target="_blank">Audain Designs</a> for free use</span>
        </div>
    </div>
</footer>

<!-- Global jQuery -->
<script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- Template JS -->
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
