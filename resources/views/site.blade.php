<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All-Ukrainian scientific and technical conference</title>
    <link rel="stylesheet" href="{{asset('assets/css/style_main.css')}}">
</head>
<body>
<header class="header">
    <div class="header__logo"></div>
    <div class="header__search">
        <form class="form">
            <input class="form-control" type="search" placeholder="Поиск">
            <button class="btn" type="submit"></button>
        </form>
    </div>
</header>
<section class="first-screen">
    <div class="first-screen__main"></div>
    <div class="first-screen__bottom"></div>
</section>

@if(isset($intros) && is_array($intros))
    <section class="info">
        <div class="container">
            <div class="info__block">
                <h1 class="info__title">{{$intros['head']}}<span>{{$intros['event']}}</span>{{$intros['place']}}</h1>
                {!! $intros['text']!!}
            </div>
        </div>
    </section>
@endif
@if(isset($important_dates) && is_object($important_dates))
    <section class="dates">
        <div class="container">
            <h2 class="dates__title">Important dates</h2>
            <div class="dates__block">

                <div class="dates__left">
                    @foreach($important_dates as $k=>$item)
                        @if($k % 2 == 0)
                            <div class="dates__item"><span class="dates__date">{{$item->event_date}}</span>
                                <div class="dates__box">
                                    <p>{{$item->event_title}}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="dates__right">
                    @foreach($important_dates as $k=>$item)
                        @if($k % 2 == 1)
                            <div class="dates__item"><span class="dates__date">{{$item->event_date}}</span>
                                <div class="dates__box">
                                    <p>{{$item->event_title}}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

            </div>
        </div>
        </div>
    </section>
@endif
<section class="keynote">
    <div class="container">
        <h2>Keynote Speaker</h2>
        <div class="keynote__block">
            <div class="keynote__item"></div>
            <div class="keynote__item">
                <p>Dr hab.inż. Paweł Czarnul Gdansk, Poland</p>
            </div>
            <div class="keynote__item"></div>
        </div>
    </div>
</section>
<section class="international">
    <h2>International Programme Committee</h2>
    <div class="international__block">
        <div class="international__left">
            <ul class="international__list">
                <li class="international__item"></li>
                <li class="international__item"></li>
                <li class="international__item"></li>
                <li class="international__item"></li>
                <li class="international__item"></li>
                <li class="international__item"></li>
            </ul>
        </div>
        <div class="international__right">
            <ul class="international__list">
                <li class="international__item"></li>
                <li class="international__item"></li>
                <li class="international__item"></li>
                <li class="international__item"></li>
                <li class="international__item"></li>
                <li class="international__item"></li>
            </ul>
        </div>
    </div>
</section>
<section class="organizing">
    <div class="container">
        <h2>Organizing Committee</h2>
        <div class="organizing__list">
            <li class="organizing__item">
                <div class="organizing__item-title">Prof. Kritsky D.N.</div>
                <p class="organizing__item-info">Chairman, Department of Information Technology Design National
                    Aerospace University, Ukraine</p>
            </li>
            <li class="organizing__item"></li>
            <li class="organizing__item"></li>
            <li class="organizing__item"></li>
            <li class="organizing__item"></li>
        </div>
    </div>
</section>
<section class="documents">
    <div class="container">
        <h2>Download documents</h2>
        <div class="documents__block">
            <div class="documents__item">
                <div class="documents__img"></div>
                <div class="documents__text">Call for paper (.pdf)</div>
            </div>
            <div class="documents__item">
                <div class="documents__img"></div>
                <div class="documents__text">Call for paper (.pdf)</div>
            </div>
            <div class="documents__item">
                <div class="documents__img"></div>
                <div class="documents__text">Call for paper (.pdf)</div>
            </div>
            <div class="documents__item">
                <div class="documents__img"></div>
                <div class="documents__text">Call for paper (.pdf)</div>
            </div>
        </div>
    </div>
</section>
<section class="documents">
    <div class="container">
        <h2>Download documents</h2>
        <div class="documents__block">
            <div class="documents__item">
                <div class="documents__img"></div>
                <div class="documents__text">Call for paper (.pdf)</div>
            </div>
            <div class="documents__item">
                <div class="documents__img"></div>
                <div class="documents__text">Call for paper (.pdf)</div>
            </div>
            <div class="documents__item">
                <div class="documents__img"></div>
                <div class="documents__text">Call for paper (.pdf)</div>
            </div>
            <div class="documents__item">
                <div class="documents__img"></div>
                <div class="documents__text">Call for paper (.pdf)</div>
            </div>
        </div>
    </div>
</section>
@if(isset($) && is_object($ ))
<section class="conference-fee" style="background-image: url('/assets/img/conference-fee.jpg')">
    <div class="container">
        <div class="conference-fee__block">
            <h2 class="conference-fee__title">Conference fee</h2>
            <div class="conference-fee__table">
                <div class="conference-fee__table-head">
                    <div class="conference-fee__table-tr">
                        <div class="conference-fee__table-th">Participants</div>
                        <div class="conference-fee__table-th">IEEE member</div>
                        <div class="conference-fee__table-th">Non-IEEE member</div>
                    </div>
                </div>
                <div class="conference-fee__table-body">
                    <div class="conference-fee__table-tr">
                        <div class="conference-fee__table-td">
                            <p>Foreign participants</p>
                        </div>
                        <div class="conference-fee__table-td">
                            <p>120 Euro</p>
                        </div>
                        <div class="conference-fee__table-td">
                            <p>150 Euro</p>
                        </div>
                    </div>
                    <div class="conference-fee__table-tr">
                        <div class="conference-fee__table-td">
                            <p>Ukrainian participants</p>
                        </div>
                        <div class="conference-fee__table-td">
                            <p>500 UAH</p>
                        </div>
                        <div class="conference-fee__table-td">
                            <p>600 UAH</p>
                        </div>
                    </div>
                    <div class="conference-fee__table-tr">
                        <div class="conference-fee__table-td">
                            <p>PhD students (single author)</p>
                        </div>
                        <div class="conference-fee__table-td">
                            <p>free</p>
                        </div>
                        <div class="conference-fee__table-td">
                            <p>60 Euro</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="submission">
    <div class="container">
        <h2 class="submission__title">Paper submission</h2>
        <div class="submission__block">
            <p>Authors should only submit formatted original 4 full pages work, including illustrations, in standard
                IEEE conference format&nbsp;<span>(IEEE Conference Format)&nbsp;</span>that has neither appeared
                elsewhere for publication nor which is under review for another publication. If a paper does not meet
                specifications, it may be returned without review.</p>
        </div>
        <div class="submission__read-more"><a href="#">Read more</a></div>
    </div>
</section>
<section class="organized">
    <div class="container">
        <h2 class="organized__title">Organized by</h2>
    </div>
</section>
<section class="address">
    <div class="container">
        <h2 class="address__title">Address of Conference Organizing Committee</h2>
        <div class="address__img"></div>
        {{"map here"}}
    </div>
</section>
@if(isset($footer) && is_array($footer))
    <section class="footer">
        <div class="container">
            <p class="footer__text">{{$footer['copy_write']}}<br>{{$footer['event_head']}}<br>"{{$footer['event_title']}}"</p>
            <p class="footer__date">{{$footer['footer']}}</p>
        </div>
    </section>
@endif
<script src="{{asset('assets/js/libs.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>

