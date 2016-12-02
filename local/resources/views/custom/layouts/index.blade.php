
<section id="home" class="home home-fullscreen">
    <div class="slide text-slider-wrapper">
        <div class="container">
            <ul class="text-slider clearfix">
                @foreach($homeblock as $item)
                    <li class="clearfix">
                        <span class="lead">{{ $item['big_text'] }}</span>
                        <p>{{ $item['small_text'] }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <a href="#services" class="go-to godown">
				<span>
					<span class="fa fa-angle-double-down fa-2x"></span>
					<span class="fa fa-angle-double-down fa-2x"></span>
					<span class="fa fa-angle-double-down fa-2x"></span>
					<span class="fa fa-angle-double-down fa-2x"></span>
					<span class="fa fa-angle-double-down fa-2x"></span>
				</span>
    </a>
</section>
<section id="services" class="gray">
    <div class="container pad-bot-50">
        <div class="heading">

            <div>{{ $fbh->first()['small_heading'] }}</div>
            <h1>{{ $fbh->first()['big_heading'] }}</h1>
            <div class="divider"><span></span></div>
            <p>{{ $fbh->first()['text'] }}</p>
        </div>
        <div class="row">
            @foreach($fbl as $item)
                <div class="col-sm-6">
                    <div class="service-item fadeInDown">
                        <div class="circle circle-l"><i class="fa {{ $item['icon'] }} fa-3x"></i></div>
                        <h3>{{ $item['name'] }}</h3>
                        <p>{{ $item['description'] }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="branded-section process">
        <div class="masked">
            <div class="container">
                <div class="heading">
                    <div>{{ $sbh->first()['small_heading'] }}</div>
                    <h3>{{ $sbh->first()['big_heading'] }}</h3>
                    <div class="divider"><span></span></div>
                    <p>{{ $sbh->first()['text'] }}</p>
                </div>
                <div class="row">
                    @foreach($sbl as $item)
                        <div class="col-sm-4">
                            <div class="process-item ">
                                <i class="fa {{ $item['icon'] }} fa-3x"></i>
                                <h3>{{ $item['name'] }}</h3>
                                <p class="font-m">{{ $item['description'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<section class="portfolio" id="portfolio">
    <div class="container">
        <div class="heading">
            <div>{{ $tbh->first()['small_heading'] }}</div>
            <h1>{{ $tbh->first()['big_heading'] }}</h1>
            <div class="divider"><span></span></div>
            <p>{{ $tbh->first()['text'] }}</p>
        </div>
        <div class="centered-pills">
            <ul class="nav nav-pills">
                @foreach($tbl as $item)
                    <li class="filter">
                        <a href="javascript:void(0);">
                            {{ $item['name'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        {{--<div class="centered-pills">--}}
        {{--<ul class="nav nav-pills">--}}
        {{--<li class="filter" data-filter="all">--}}
        {{--<a href="javascript:void(0)">All</a>--}}
        {{--</li>--}}
        {{--<li class="filter" data-filter="web-design">--}}
        {{--<a href="javascript:void(0)">Web design</a>--}}
        {{--</li>--}}
        {{--<li class="filter" data-filter="g-design">--}}
        {{--<a href="javascript:void(0)">Graphic design</a>--}}
        {{--</li>--}}
        {{--<li class="filter" data-filter="photography">--}}
        {{--<a href="javascript:void(0)">Photography</a>--}}
        {{--</li>--}}
        {{--<li class="filter" data-filter="illustraion">--}}
        {{--<a href="javascript:void(0)">Illustration</a>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--</div>--}}
    </div>
    {{--<div class="container">--}}
    {{--<div id="single-project"></div>--}}
    {{--</div>--}}
    {{--<div>--}}
    {{--<ul class="full-portfolio clearfix" id="Grid">--}}
    {{--<li class="mix col-xs-6 col-sm-4 col-md-3 col-lg-2 portfolio-item web-design">--}}
    {{--<a href="ajax/project-1.html">--}}
    {{--<img src="img/portfolio/placeholder.png" class="img-responsive" alt="">--}}
    {{--<div class="mask">--}}
    {{--<h4>Moderno</h4>--}}
    {{--<div class="divider"><span></span></div>--}}
    {{--<p class="font-m">PSD</p>--}}
    {{--</div>--}}
    {{--</a>--}}
    {{--</li>--}}
    {{--<li class="mix col-xs-6 col-sm-4 col-md-3 col-lg-2 portfolio-item g-design">--}}
    {{--<a href="ajax/project-1.html">--}}
    {{--<img src="img/portfolio/placeholder-1.png" class="img-responsive" alt="">--}}
    {{--<div class="mask">--}}
    {{--<h4>App Screen Showcase</h4>--}}
    {{--<div class="divider"><span></span></div>--}}
    {{--<p class="font-m">PSD</p>--}}
    {{--</div>--}}
    {{--</a>--}}
    {{--</li>--}}
    {{--<li class="mix col-xs-6 col-sm-4 col-md-3 col-lg-2 portfolio-item photography">--}}
    {{--<a href="ajax/project-1.html">--}}
    {{--<img src="img/portfolio/placeholder-2.png" class="img-responsive" alt="">--}}
    {{--<div class="mask">--}}
    {{--<h4>Molly</h4>--}}
    {{--<div class="divider"><span></span></div>--}}
    {{--<p class="font-m">PSD</p>--}}
    {{--</div>--}}
    {{--</a>--}}
    {{--</li>--}}
    {{--<li class="mix col-xs-6 col-sm-4 col-md-3 col-lg-2 portfolio-item illustraion">--}}
    {{--<a href="ajax/project-1.html">--}}
    {{--<img src="img/portfolio/placeholder.png" class="img-responsive" alt="">--}}
    {{--<div class="mask">--}}
    {{--<h4>Workspace Elements</h4>--}}
    {{--<div class="divider"><span></span></div>--}}
    {{--<p class="font-m">AI / PSD</p>--}}
    {{--</div>--}}
    {{--</a>--}}
    {{--</li>--}}
    {{--<li class="mix col-xs-6 col-sm-4 col-md-3 col-lg-2 portfolio-item web-design">--}}
    {{--<a href="ajax/project-1.html">--}}
    {{--<img src="img/portfolio/placeholder-1.png" class="img-responsive" alt="">--}}
    {{--<div class="mask">--}}
    {{--<h4>Vintage Logo Insignias</h4>--}}
    {{--<div class="divider"><span></span></div>--}}
    {{--<p class="font-m">AI / ESP</p>--}}
    {{--</div>--}}
    {{--</a>--}}
    {{--</li>--}}
    {{--<li class="mix col-xs-6 col-sm-4 col-md-3 col-lg-2 portfolio-item g-design">--}}
    {{--<a href="ajax/project-1.html">--}}
    {{--<img src="img/portfolio/placeholder-2.png" class="img-responsive" alt="">--}}
    {{--<div class="mask">--}}
    {{--<h4>Retro Vetor Badges</h4>--}}
    {{--<div class="divider"><span></span></div>--}}
    {{--<p class="font-m">AI</p>--}}
    {{--</div>--}}
    {{--</a>--}}
    {{--</li>--}}
    {{--<li class="mix col-xs-6 col-sm-4 col-md-3 col-lg-2 portfolio-item photography">--}}
    {{--<a href="ajax/project-1.html">--}}
    {{--<img src="img/portfolio/placeholder.png" class="img-responsive" alt="">--}}
    {{--<div class="mask">--}}
    {{--<h4>Mentum</h4>--}}
    {{--<div class="divider"><span></span></div>--}}
    {{--<p class="font-m">PSD</p>--}}
    {{--</div>--}}
    {{--</a>--}}
    {{--</li>--}}
    {{--<li class="mix col-xs-6 col-sm-4 col-md-3 col-lg-2 portfolio-item illustraion">--}}
    {{--<a href="ajax/project-1.html">--}}
    {{--<img src="img/portfolio/placeholder-2.png" class="img-responsive" alt="">--}}
    {{--<div class="mask">--}}
    {{--<h4>Flat Browser Mockup</h4>--}}
    {{--<div class="divider"><span></span></div>--}}
    {{--<p class="font-m">AI / PSD</p>--}}
    {{--</div>--}}
    {{--</a>--}}
    {{--</li>--}}
    {{--<li class="mix col-xs-6 col-sm-4 col-md-3 col-lg-2 portfolio-item web-design">--}}
    {{--<a href="ajax/project-1.html">--}}
    {{--<img src="img/portfolio/placeholder.png" class="img-responsive" alt="">--}}
    {{--<div class="mask">--}}
    {{--<h4>Flying Business Cards</h4>--}}
    {{--<div class="divider"><span></span></div>--}}
    {{--<p class="font-m">PSD</p>--}}
    {{--</div>--}}
    {{--</a>--}}
    {{--</li>--}}
    {{--<li class="mix col-xs-6 col-sm-4 col-md-3 col-lg-2 portfolio-item g-design">--}}
    {{--<a href="ajax/project-1.html">--}}
    {{--<img src="img/portfolio/placeholder-1.png" class="img-responsive" alt="">--}}
    {{--<div class="mask">--}}
    {{--<h4>Tri Fold Brochure</h4>--}}
    {{--<div class="divider"><span></span></div>--}}
    {{--<p class="font-m">PSD</p>--}}
    {{--</div>--}}
    {{--</a>--}}
    {{--</li>--}}
    {{--<li class="mix col-xs-6 col-sm-4 col-md-3 col-lg-2 portfolio-item photography">--}}
    {{--<a href="ajax/project-1.html">--}}
    {{--<img src="img/portfolio/placeholder-2.png" class="img-responsive" alt="">--}}
    {{--<div class="mask">--}}
    {{--<h4>iPhone 6 Mockups</h4>--}}
    {{--<div class="divider"><span></span></div>--}}
    {{--<p class="font-m">AI / PSD</p>--}}
    {{--</div>--}}
    {{--</a>--}}
    {{--</li>--}}
    {{--<li class="mix col-xs-6 col-sm-4 col-md-3 col-lg-2 portfolio-item illustraion">--}}
    {{--<a href="ajax/project-1.html">--}}
    {{--<img src="img/portfolio/placeholder.png" class="img-responsive" alt="">--}}
    {{--<div class="mask">--}}
    {{--<h4>Large Poster Mockup</h4>--}}
    {{--<div class="divider"><span></span></div>--}}
    {{--<p class="font-m">PSD</p>--}}
    {{--</div>--}}
    {{--</a>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    <div class="container">
        <div class="heading">
            <h1>{{ $tblink->first()['heading'] }}</h1>
            <p>{{ $tblink->first()['decription'] }}</p>
        </div>
        <div style="text-align:center; margin-bottom: 50px">
            <a href="{{ $tblink->first()['link'] }}" class="btn btn-primary">{{ $tblink->first()['buttonName'] }}</a>
        </div>
    </div>
    <div class="branded-section numbers">
        <div class="masked">
            <div class="container">
                <div class="heading">
                    <div>{{ $fourthbh->first()['small_heading'] }}</div>
                    <h2>{{ $fourthbh->first()['big_heading'] }}</h2>
                    <div class="divider"><span></span></div>
                    <p>{{ $fourthbh->first()['text'] }}</p>
                </div>
                <div class="row">
                    @foreach($fourthbl as $item)
                        <div class="col-md-3">
                            <div class="number-item">
                                <span class="number" id="clientsCounter" data-count="{{ $item['number'] }}" data-duration="2">{{ $item['number'] }}</span>
                                <span class="text">{{ $item['name'] }}</span>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="heading">
                    <p>{{ $fourthblast->first()['additional'] }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about">
    <div class="container">
        <div class="heading">
            <div>{{ $fifthbh->first()['small_heading'] }}</div>
            <h2>{{ $fifthbh->first()['big_heading'] }}</h2>
            <div class="divider"><span></span></div>
            <p>{{ $fifthbh->first()['text'] }}</p>
        </div>
        <div class="row">
            @foreach($fifthbl as $item)
                <div class="col-md-6">
                    <div class="about-item">
                        <div class="circle pull-left">
                            <i class="fa {{ $item['icon'] }}"></i>
                        </div>
                        <h4>{{ $item['name'] }}</h4>
                        <p class="font-m">{{ $item['decription'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="gray">
        <div class="container">
            <div class="heading">
                <div>{{ $sixthbh->first()['small_heading'] }}</div>
                <h2>{{ $sixthbh->first()['big_heading'] }}</h2>
                <div class="divider"><span></span></div>
                <p>{{ $sixthbh->first()['text'] }}</p>
            </div>
            <div class="row">
                <ul class="team " id="og-grid">
                    @foreach($sixthbl as $item)
                        <li class="col-md-3">
                            <a href="" class="team-member" data-title="{{ $item['name'] }}"
                               data-description="{{ $item['description'] }}"
                               data-twitter="GraphBerry" data-facebook="facebook">
                                <img src="{{ $images[$item['image']]->path() }}" alt="{{ $images[$item['image']]->caption }}"
                                     class="img-responsive">
                                <span class="name">{{ $item['name'] }}</span>
                                <span class="title">{{ $item['description'] }}</span>
                            </a>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
    {{--<div class="branded-section skills">--}}
        {{--<div class="masked">--}}
            {{--<div class="container">--}}
                {{--<div class="heading">--}}
                    {{--<h2>Навыки</h2>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt--}}
                        {{--ut laoreet dolore magna aliquam erat volutpat.</p>--}}
                {{--</div>--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<div class="chart">--}}
                            {{--<div class="skill" data-percent="90">--}}
                                {{--<span class="percent">90%</span>--}}
                            {{--</div>--}}
                            {{--<h3>HTML &amp; CSS</h3>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-3 ">--}}
                        {{--<div class="chart">--}}
                            {{--<div class="skill" data-percent="96">--}}
                                {{--<span class="percent">96%</span>--}}
                            {{--</div>--}}
                            {{--<h3>AI &amp; PS</h3>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<div class="chart">--}}
                            {{--<div class="skill" data-percent="85">--}}
                                {{--<span class="percent">85%</span>--}}
                            {{--</div>--}}
                            {{--<h3>JS</h3>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<div class="chart">--}}
                            {{--<div class="skill" data-percent="94">--}}
                                {{--<span class="percent">94%</span>--}}
                            {{--</div>--}}
                            {{--<h3>Photography</h3>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
</section>
<section id="branded-section clients">
    {{--<div class="container">--}}
        {{--<div class="heading">--}}
            {{--<div>Наши выпускники</div>--}}
            {{--<h1>Где работают наши выпускники</h1>--}}
            {{--<div class="divider">--}}
                {{--<span></span>--}}
            {{--</div>--}}
            {{--<p>Кафедра гордится своими выпускниками, которые сделали карьеру благодаря знаниям, умениям и навыкам, получен-ным во время обучения в ХАИ.</p>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--<ul class="client-slider clearfix" id="clint-slider">--}}
                {{--<li><img src="http://vlove.com.ua/302/files/psa8wviiiroymklousn2/datagroup_newlogo.png" alt="" class="grayscale"></li>--}}
                {{--<li><img src="http://vlove.com.ua/302/files/iyqkdow1wuqa8mljhffn/logo.png" alt="" class="grayscale"></li>--}}
                {{--<li><img src="http://vlove.com.ua/302/files/wfmyviyoowueebacs9rd/el-logo-02.png" alt="" class="grayscale"></li>--}}
                {{--<li><img src="http://vlove.com.ua/302/files/psa8wviiiroymklousn2/datagroup_newlogo.png" alt="" class="grayscale"></li>--}}
                {{--<li><img src="http://vlove.com.ua/302/files/iyqkdow1wuqa8mljhffn/logo.png" alt="" class="grayscale"></li>--}}
                {{--<li><img src="http://vlove.com.ua/302/files/wfmyviyoowueebacs9rd/el-logo-02.png" alt="" class="grayscale"></li>--}}
                {{--<li><img src="http://vlove.com.ua/302/files/psa8wviiiroymklousn2/datagroup_newlogo.png" alt="" class="grayscale"></li>--}}
                {{--<li><img src="http://vlove.com.ua/302/files/iyqkdow1wuqa8mljhffn/logo.png" alt="" class="grayscale"></li>--}}
                {{--<li><img src="http://vlove.com.ua/302/files/wfmyviyoowueebacs9rd/el-logo-02.png" alt="" class="grayscale"></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
        {{--<ul class="client-nav">--}}
            {{--<li id="client-prev"></li>--}}
            {{--<li id="client-next"></li>--}}
        {{--</ul>--}}
    {{--</div>--}}
    <div class="branded-section quote">
        <div class="masked">
            <div class="container">
                <div id="testimonials" class="bxslider clearfix">
                    @foreach($seventhbl as $item)
                        <blockquote>
                            <p>{{ $item['text'] }}</p>
                            <div class="divider">
                                <span></span>
                            </div>
                            {{ $item['name'] }}
                        </blockquote>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

