<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All-Ukrainian scientific and technical conference</title>
    <link rel="stylesheet" href="{{asset('assets/css/style_main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/img.css')}}">
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
<section class="conference">
    <div class="container">
        <h2 class="title">Conference topics</h2>
        <div class="conference__block">
            <div class="conference__left">
                <ul class="conference__list" style="color: #ffffff; font-size: 1.5em;">
                    <li class="conference__item">s</li>
                    <li class="conference__item">sadas</li>
                    <li class="conference__item"></li>
                    <li class="conference__item"></li>
                    <li class="conference__item"></li>
                    <li class="conference__item"></li>
                </ul>
            </div>
            <div class="conference__right">
                <ul class="conference__list" style="color: #ffffff; font-size: 1.5em;">
                    <li class="conference__item"></li>
                    <li class="conference__item"></li>
                    <li class="conference__item"></li>
                    <li class="conference__item"></li>
                    <li class="conference__item"></li>
                    <li class="conference__item"></li>
                </ul>
            </div>
        </div>
    </div>
</section>
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
    <div class="container">
        <h2 class="title">International Programme Committee</h2>
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
    </div>
</section>
@if(isset($organizing) && is_object($organizing))
    <section class="organizing">
        <div class="container">
            <h2 class="title">Organizing Committee</h2>
            <div class="organizing__list">
                @foreach($organizing as $k=>$item)
                    <li class="organizing__item">
                        <div class="organizing__item-title">{{$item->degree}} {{$item->fio}}</div>
                        <p class="organizing__item-info">{{$item->info}}</p>
                    </li>
                @endforeach
                <li class="organizing__item"></li>


            </div>
        </div>
    </section>
@endif
@if(isset($documents) && is_object($documents))
    <section class="documents">
        <div class="container">
            <h2 class="title">Download documents</h2>
            <div class="documents__block">
                @foreach($documents as $document)
                <div class="documents__item">
                    <div class="documents__img">{!! Html::image('assets/img/'.$document->icon)!!}</div>
                    <div class="documents__text">{{$document->title}}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
@if(isset($prices) && is_object($prices))
    <section class="conference-fee" style="background-image: url('/assets/img/conference-fee.jpg')">
        <div class="container">
            <div class="conference-fee__block">
                <h2 class="title">Conference fee</h2>
                <div class="conference-fee__table">
                    <div class="conference-fee__table-head">
                        <div class="conference-fee__table-tr">
                            <div class="conference-fee__table-th">Participants</div>
                            <div class="conference-fee__table-th">IEEE member</div>
                            <div class="conference-fee__table-th">Non-IEEE member</div>
                        </div>
                    </div>
                    <div class="conference-fee__table-body">
                        @foreach($prices as $k=>$price)
                            <div class="conference-fee__table-tr">
                                <div class="conference-fee__table-td">
                                    <p>{{$price->title}}</p>
                                </div>

                                <div class="conference-fee__table-td">
                                    <p>{{$price->first_price}}</p>
                                </div>
                                <div class="conference-fee__table-td">
                                    <p>{{$price->second_price}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
@if(isset($papers) && is_object($papers))
    @foreach($papers as $k=>$paper)
        <section class="submission">

            <div class="container">
                <h2 class="submission__title">{{$paper->title}}</h2>
                <div class="submission__block">
                    <p>{!! $paper->text !!}</p>
                </div>
                <div class="submission__read-more"><a href="#">{!! $paper->button_name !!}</a></div>
            </div>

        </section>
    @endforeach
@endif
@if(isset($organized_by) && is_array($organized_by))
    <section class="organized">
        <div class="container">
            <h2 class="organized__title">{{$organized_by['title']}}</h2>
        </div>
    </section>
    <section class="address">
        <div class="container">
            <h2 class="address__title">{{$organized_by['address']}}</h2>
            <div class="my_address__img">{!! Html::image('assets/img/'.$organized_by['image'])!!}</div>
        </div>
    </section>
    {!!$organized_by['google_map']!!}
@endif
@if(isset($footer) && is_array($footer))
    <section class="footer">
        <div class="container">
            <p class="footer__text">{{$footer['copy_write']}}<br>{{$footer['event_head']}}
                <br>"{{$footer['event_title']}}"</p>
            <p class="footer__date">{{$footer['footer']}}</p>
        </div>
    </section>
@endif
<script src="{{asset('assets/js/libs.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>

