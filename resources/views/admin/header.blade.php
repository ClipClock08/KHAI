<!-- Container -->
<div class="container portfolio_title">

    <!-- Title -->
    <div class="section-title">
        <h2>{{$title}}</h2>
    </div>
    <!--/Title -->

</div>
<!-- Container -->

<div class="portfolio-top"></div>

<!-- Portfolio Filters -->
<div class="portfolio">
    <div id="filters" class="sixteen columns">
        <ul style="padding: 0 0">
            <li>
                <a href="{{route('intro')}}">
                    <h5>Main info</h5>
                </a>
            </li>
            <li>
                <a href="{{route('important_dates')}}">
                    <h5>Important dates</h5>
                </a>
            </li>
            {{--<li>
                <a href="{{route('conf_topics')}}">
                    <h5>Conference topics</h5>
                </a>
            </li>--}}
            <li>
                <a href="{{route('keynote')}}">
                    <h5>Keynotes Speaker</h5>
                </a>
            </li>
            <li>
                <a href="{{route('organizing')}}">
                    <h5>Organizing Committee</h5>
                </a>
            </li>
            <li>
                <a href="{{route('documents')}}">
                    <h5>Download documents</h5>
                </a>
            </li>
            <li>
                <a href="{{route('prices')}}">
                    <h5>Conference fee</h5>
                </a>
            </li>
            <li>
                <a href="{{route('paper')}}">
                    <h5>Paper submission</h5>
                </a>
            </li>
            <li>
                <a href="{{route('organizedBy')}}">
                    <h5>Organized by</h5>
                </a>
            </li>
            <li>
                <a href="{{route('footer')}}">
                    <h5>Footer info</h5>
                </a>
            </li>
        </ul>
    </div>
</div>

<!--/Portfolio Filters -->
