<section id="contact" class="gray">
    <div class="container">
        <div class="heading">
            <div>Contact Us</div>
            <h1>Where you can find us</h1>
            <div class="divider">
                <span></span>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="row">
            <div class="col-md-4 adress-element ">
                <i class="fa fa-home fa-2x"></i>
                <h3>Our adress</h3>
                <span class="font-l">Our adress 123, Serbia</span>
            </div>
            <div class="col-md-4 adress-element delay2">
                <i class="fa fa-comment fa-2x"></i>
                <h3>Our mail</h3>
                <span class="font-l">awesomemail@smakmail.com</span>
            </div>
            <div class="col-md-4 adress-element delay4">
                <i class="fa fa-phone fa-2x"></i>
                <h3>Our phone</h3>
                <span class="font-l">+012 555 555 5555</span>
            </div>
        </div>
    </div>
    <div class="branded-section contact-form">
        <div class="masked">
            <div class="container">
                <div class="heading">
                    <h1 class="light-font">Send us a message</h1>
                    <p class="light-font">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et viverra ipsum.</p>
                </div>
                <form class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-4" style="position:relative">
                            <input type="text" name="Name" data-new-placeholder="What is your name?" class="form-control label_better" placeholder="Name">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="Email" class="form-control label_better" placeholder="Email">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="Phone" class="form-control label_better" placeholder="Phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea class="form-control label_better" placeholder="Your comment.." rows="7"></textarea>
                        </div>
                    </div>
                    <div class="form-group commands">
                        <button class="btn btn-primary">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <p>&copy; Copyright <a href="http://graphberry.com?ref=smak">GraphBerry.com</a> 2014 All rights reserved</p>
        <ul class="social-list">
            <li class="facebook">
                <a href="http://goo.gl/RqhEjP"><i class="fa fa-facebook"></i></a>
            </li>
            <li class="twitter">
                <a href="http://goo.gl/hUfpSB"><i class="fa fa-twitter"></i></a>
            </li>
            <li class="dribbble">
                <a href="http://goo.gl/k9zAy5">	<i class="fa fa-dribbble"></i></a>
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
    $(function() {
        Grid.init();
    });
</script>
</body>
</html>