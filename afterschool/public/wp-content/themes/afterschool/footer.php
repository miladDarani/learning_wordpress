        <footer class="main col-xs-12 mb-3">

            <nav id="footer">

                <ul class="menu">
                <?php wp_nav_menu(['menu' => 'footer_menu']); ?>
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