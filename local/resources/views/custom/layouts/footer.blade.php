<section id="contact" class="gray">
    <div class="container">
        <div class="heading">
            <div>Связаться с нами</div>
            <h1>Где вы можете нас найти</h1>
            <div class="divider">
                <span></span>
            </div>
            <p class="light-font">Выпускники работают в IT-фирмах, связанных с созданием новых информационных технологий
                и управляющих систем, участвуют в проектах по реинжинирингу и модернизации компьютерных систем и имеют
                прекрасные перспективы карьерного роста в сфере информационной поддержки производства и бизнеса в
                Украине и зарубежом. По специальности ежегодно обучаются свыше 300 студентов.
            </p>
        </div>
        <div class="row">
            <div class="col-md-4 adress-element ">
                <i class="fa fa-home fa-2x"></i>
                <h3>Наш адрес</h3>

                <span class="font-l">ул. Чкалова, 17, г. Харьков, 61070, Украина</span>
            </div>
            <div class="col-md-4 adress-element delay2">
                <i class="fa fa-comment fa-2x"></i>
                <h3>Наш e-mail</h3>
                <span class="font-l">k302@khai.edu</span>
            </div>
            <div class="col-md-4 adress-element delay4">
                <i class="fa fa-phone fa-2x"></i>
                <h3>Наш телефон</h3>
                <span class="font-l">+38 (057) 7884-251</span>
            </div>
        </div>
    </div>
    <div class="branded-section contact-form">
        <div class="masked">
            <div class="container">
                <div class="heading">
                    <h1 class="light-font">Напишите нам</h1>
                    <div class="divider">
                        <span></span>
                    </div>
                    <p class="light-font">Кафедра имеет сорокалетний опыт подготовки специалистов по компьютерным наукам
                        и информационным технологиям и имеет высококвалифицированный качественный преподавательский
                        состав, который сформирован на основе созданной  научно-педагогической и учебно-методической
                        школ. Все преподаватели кафедры имеют научную степень к.т.н. (PhD) и д.т.н., а также звания
                        доцента и профессора.</p>

                </div>
                <form class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-4" style="position:relative">
                            <input type="text" name="Name" data-new-placeholder="Ваше имя?"
                                   class="form-control label_better" placeholder="Name">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="Email" class="form-control label_better"
                                   placeholder="Електронная почта">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="Phone" class="form-control label_better"
                                   placeholder="Контактный телефон">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea class="form-control label_better" placeholder="Ваше сообщение"
                                      rows="7"></textarea>
                        </div>
                    </div>
                    <div class="form-group commands">
                        <button class="btn btn-primary">Отправить сообщение</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        {{--<p>&copy; Copyright <a href="http://graphberry.com?ref=smak">GraphBerry.com</a> 2014 All rights reserved</p>--}}
        <ul class="social-list">
            <li class="facebook">
                <a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li class="twitter">
                <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li class="dribbble">
                <a href="#"> <i class="fa fa-dribbble"></i></a>
            </li>
            <li class="youtube">
                <a href="#"><i class="fa fa-youtube"></i></a>
            </li>
        </ul>
        <a href="#home" class="square-l goup" style="position: relative">
					<span>
						<span class="fa fa-angle-double-up fa-2x"></span>
						<span class="fa fa-angle-double-up fa-2x"></span>
						<span class="fa fa-angle-double-up fa-2x"></span>
						<span class="fa fa-angle-double-up fa-2x"></span>
						<span class="fa fa-angle-double-up fa-2x"></span>
					</span>
        </a>
    </div>
</footer>
</div>
<!-- Load all jsavascrip files -->
<script type="text/javascript" src="{{ URL::asset('custom-assets/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('custom-assets/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('custom-assets/js/jquery.bxslider.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('custom-assets/js/jquery.label_better.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('custom-assets/js/jquery.mixitup.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('custom-assets/js/jquery.easypiechart.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('custom-assets/js/jquery.inview.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('custom-assets/js/countUp.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('custom-assets/js/main.js') }}"></script>
<script src="{{ URL::asset('custom-assets/js/grid.js') }}"></script>
<script>
    $(function () {
        Grid.init();
    });
</script>
</body>
</html>