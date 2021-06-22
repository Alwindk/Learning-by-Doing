</main>
<script>
    $(document).ready(function() {

        AOS.init({
            duration: 1200,
            // disableMutationObserver: true,
            // disable: 'phone'
        });

        AOS.init({
            // disable: 'tablet'
        });
    })

    $(window).load(function() {
        setTimeout(function() {
            AOS.refresh();
        }, 100);
    });
</script>

<script>
    $(document).ready(function() {

    });
    //Get the button:
    mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        $('html, body').animate({
            scrollTop: 0
        }, 'slow');
        //document.body.scrollTop = 0; // For Safari
        //document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>

</body>


</html>