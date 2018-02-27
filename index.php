<?php
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

/** Set access tokens and consumer keys blah blah blah **/

define('CONSUMER_KEY', 'tYDERnEx3EWaPVtMW2Q37r4Xj');
define('CONSUMER_SECRET', '5uFE3gfBkrZtdskQM0vWhNASttLAqGZikyVwFaeFum5Dj3sfSa');
define('ACCESS_TOKEN', '960408518653370368-6jHUrq5W1cHrMEUcKCCnnf5icYjELqJ');
define('ACCCESS_TOKEN_SECRET', 'GB9MKSTXpVCYxHjQntAspblnnFwPNQQ8n20dMqZU1ncGR');

$toa = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCCESS_TOKEN_SECRET);

$query = array(
    "q" => "#RasperryPi+OR+#csharp+OR+#sql+OR+#java+OR+#database+OR+#softwaredev+OR+#amazonaws",
    "tweet_mode" => "extended",
    "count" => "25",
    "lang" => "en",
    "result_type" => "popular"
);

$results = $toa->get('search/tweets', $query);
?>
<!doctype html>
<html lang="en">
<head>
    <title>UC Clermont Capstone</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">-->
    <link rel="stylesheet" href="css/glyphicons.css">
</head>

<body>

<!-- Main navigation -->
<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-primary">
    <div class="container">

        <!-- Company name shown on mobile -->
        <a class="navbar-brand" href="#"><span>UC</span>Clermont</a>

        <!-- Mobile menu toggle -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Main navigation items -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Tech</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Faculty</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Forum</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Get Help</a>
                </li>
            </ul>

            <form class="form-inline header-search-form my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" size="7"  placeholder="Search" aria-label="Search">
                <button class="btn btn-primary my-2 my-sm-0" type="submit">Search <i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
    </div>
</nav>



<!-- Picture slider Jumbotron -->
<div class="jumbotron-wrap jumbotron-wrap-image mb-0">
    <div class="container">
        <div id="mainCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="jumbotron">
                        <h1 class="text-center"><img src="http://bsnscb.com/data/out/96/39215231-hexagon-wallpapers.png" alt="Hexagon" width="1000" height="200"> </h1>
                        <p class="lead text-center">Testing pictures.</p>
                        <p class="lead text-center">
                        </p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="jumbotron">
                        <h1 class="text-center"><img src="https://i.imgur.com/MyJ3oFF.jpg" alt="Tree" width="1000" height="200"></h1>
                        <p class="lead text-center">Testing another picture.</p>
                        <p class="lead text-center">
                        </p>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<main class="container">
    <div class="row">

        <!-- Main content -->
        <div class="col-md-8">
            <article>
                <h2 class="article-title">About Tech Club</h2>

                <p class="article-meta">Updated February 18 by <a href="#" rel="author">Gabe Dryden</a></p>

                <p>Alright chums! This is where we really get into it. The nitty gritty, the meat and potatos, the pièce de résistance! ... The about section.</a></p>

                <p> We'll for sure need to sit down with Tech Club and get a pretty in depth of what they are about and what their goals are. I know they have have a main goal of getting out reach to Highschoolers, but we should probably elaborate on it here.</p>

                <p>Maybe list off their goals? Could go with or without on this bit, just might look nice with a little bit of fluff.</p>

                <ul>
                    <li>Get highschoolers interested</li>
                    <li>Discuss cool tech stuff</li>
                    <li>Bring the community closer</li>
                    <li>Take over UC as the most poular club</li>
                    <li>... And then the world</li>
                </ul>

                <p>Go ahead and add a cool closer statment, or add more stuff, doesnt matter, it's up to Tech Club what they want here.</p>

            </article>

            <article>

                <h2 class="article-title">Another bold section</h2>
                <p class="article-meta">This little "updated" or "posted by" bit can go or stay. <a href="#" rel="author">Just something I though looked cool</a></p>

                <p>Again, just another section to fill out with information. We can keep it or scrap it, it doesnt matter. The only thing is that this section ...</a></p>

                <h3>Has big red letters in the middle of it!</h3>

                <p>Big red letters are cool. Can add a little pizzaz to the page, but we can swap it out from here and just toss it into the above section if anything really calls for big red letters.</p>

            </article>


            <!-- Example pagination Bootstrap component -->

        </div>


        <!-- Sidebar -->
        <aside class="col-md-4">
            <div class="sidebar-box">
                <h4>Tech News</h4>
                <div class="list-group list-group-root">
                    <div id="carousel-outer" class="carousel slide" data-ride="carousel" style="margin-left:10px;">
                        <div class="carousel-inner">
                            <?php
                            $counter = 1;
                            foreach ($results->statuses as $result => $tweet) { ?>
                                <div class="carousel-item <?php if ($counter <= 1) {
                                    echo " active";
                                } ?>">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <img src="<?= $tweet->user->profile_image_url; ?>"/>
                                            <p class="tweet-title"><?= $tweet->user->name; ?> -
                                                @<?= $tweet->user->screen_name; ?>
                                        </div>
                                        <div class="col-sm-12">
                                            <p class="tweet-body"><?= $tweet->full_text; ?></p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p>
                                                <span class="glyphicon glyphicon-comment"></span>
                                                <?= $tweet->reply_count; ?>
                                            </p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p>
                                                <span class="glyphicon glyphicon-retweet"></span>
                                                <?= $tweet->retweet_count; ?>
                                            </p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p>
                                                <span class="glyphicon glyphicon-heart"></span>
                                                <?= $tweet->favorite_count; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $counter++;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sidebar-box sidebar-box-bg">
                <h4>UCC Tech Club Facebook</h4>
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-page" data-href="https://www.facebook.com/ucctechclub/"
                     data-tabs="timeline, events"
                     data-small-header="false"
                     data-adapt-container-width="true"
                     data-hide-cover="false"
                     data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/ucctechclub/"
                                class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/ucctechclub/">UCC Technology Club</a></blockquote>
                </div>
            </div>

            <div class="sidebar-box">
                <h4>Helpful Links</h4>
                <ul>
                    <li><a href="#" title="#">put a link to W3 Schools</a></li>
                    <li><a href="#" title="#">A link to StackOverFlow</a></li>
                    <li><a href="#" title="#">MSDN would probably be good too</a></li>
                </ul>
            </div>
        </aside>


    </div>
</main>



<!-- Coloured bg jumbotron -->
<div class="colored-bg-container jumbotron-wrap">
    <div class="container">
        <div class="jumbotron px-0">
            <h2>Tech club is for cool kids</h2>
            <p class="lead">Not exactly sure what we should put here. I just think it looks good to break up all the white with something. Give the eyes a rest from so much white. Should probably sit down with Tech Club and get their input.</p>
        </div>
    </div>
</div>




<!-- Main content area -->
<div class="card-container">
    <div class="container">

        <div class="text-center padded-box pb-0">
            <h2>UC Tech Club</h2>
            <p class="lead">We should talk to the UC Tech Club and find out what they would like us to say about them. Probably put a brief summery of what they do or what they are about. Just something quick to get people interested.</p>

        </div>



        <div class="padded-box row">
            <div class="col-md-4">
                <div class="card text-center">
                    <img class="card-img-top" src="images/pic1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Info about the Bi-weekly Smash event. </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center">
                    <img class="card-img-top" src="images/pic1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Potentially talk about the club itself. These colums size to the ammount of text in them. Lets keep it uniform</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center">
                    <img class="card-img-top" src="images/pic1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Why not, lets put the LAN party here. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Gray bg jumbotron -->
<div class="gray-bg-container mb-0 jumbotron-wrap">
    <div class="container">
        <div class="jumbotron px-0">
            <h2>Another box to break up the white</h2>
            <p class="lead"> "Dont believe everything you read on the internet" -Abraham Lincoln</p>
        </div>
    </div>
</div>



<!-- Footer -->
<footer class="footer">
    <div class="footer-lists">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <ul>
                        <li><h4>I</h4></li>
                        <li><a href="#">Links!</a></li>
                        <li><a href="#">Links!</a></li>
                        <li><a href="#">Links!</a></li>
                        <li><a href="#">Links!</a></li>
                        <li><a href="#">Links!</a></li>
                    </ul>
                </div>
                <div class="col-sm">
                    <ul>
                        <li><h4>HEARD</h4></li>
                        <li><a href="#">Links!</a></li>
                        <li><a href="#">Links!</a></li>
                        <li><a href="#">Links!</a></li>
                        <li><a href="#">Links!</a></li>
                        <li><a href="#">Links!</a></li>
                    </ul>
                </div>
                <div class="col-sm">
                    <ul>
                        <li><h4>YOU</h4></li>
                        <li><a href="#">Links! </a></li>
                        <li><a href="#">Links!</a></li>
                        <li><a href="#">Links!</a></li>
                        <li><a href="#">Links!</a></li>
                        <li><a href="#">Links!</a></li>
                    </ul>
                </div>
                <div class="col-sm">
                    <h4>LIKE</h4>
                    <p>This part isnt a link, but can be used for something. I dont know what, but we can think of something cool. Also, cool buttons.</p>

                    <p class="social-icons">
                        <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="footer-bottom">
        <p class="text-center">Neat little footer too. We can drop something like "Copyright UCClermont Tech Club"</p>
        <p class="text-center"><a href="#">Back to top</a></p>
    </div>

</footer>



<!-- Bootcamp JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>

</body>
</html>
