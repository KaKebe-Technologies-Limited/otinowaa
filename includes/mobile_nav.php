<nav id="mobile-nav" class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="images/otino-wa-logo.jpg" width="16" height="16" alt>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
        </div>
    </div>
</nav>
<script>

    function mobinav {
        function myFunction(x) {
            var nv = document.getElementById('mobile_nav');
            if (x.matches) { // If media query matches
            nv.style.display = "block";
            } else {
            nv.style.display = "none";
        }
    }

        var x = window.matchMedia("(max-width: 768px)")
        mobinav(x) // Call listener function at run time
        x.addListener(mobinav) // Attach listener function on state changes

    }
    mobinav();
</script>