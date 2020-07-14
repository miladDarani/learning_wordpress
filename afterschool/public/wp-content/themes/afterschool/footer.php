        <footer class="main col-xs-12 mb-3">

            <nav id="footer">

                <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Elementary School</a></li>
                <li><a href="#">Middle School</a></li>
                <li><a href="#">High School</a></li>
                <li><a href="#">Register</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms of Use</a></li>
            </ul>

            </nav>

                <p class="copyright">Copyright &copy; 2015 by After School</p>
        </footer>

    </div><!-- /container -->

    <script>

        $(document).ready(function(){
            setMenu();
            $(window).resize(function(){
                setMenu();
            });
        });

        function setMenu() {
            if($(window).width() < 768) {
                $('nav#main').hide();
            } else {
                $('nav#main').show();
            }
        }

        $('a.menu_toggle').click(function(){
            $('nav#main').toggle();
        });

    </script>
    <?php wp_footer(); ?>
    </body>
</html>