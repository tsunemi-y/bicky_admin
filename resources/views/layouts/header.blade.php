<header class="navbar-dark sticky-top flex-md-nowrap p-0">
    <button class="navbar-toggler px-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <img src="{{ asset('images/hamburger-icon.png') }}">
    </button>  
</header>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>
$(document).ready(function(){
    $(".navbar-toggler").click(function(event){
        event.stopPropagation();
        $("#sidebar").css("display", "block");
    });

    $(document).on("click", function(event){
        if (!$(event.target).closest("#sidebar, .navbar-toggler").length) {
            $("#sidebar").css("display", "none");
        }
    });
});
</script>
