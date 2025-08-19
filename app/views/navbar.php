<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="/static/css/navbar.css">
</head>
    <nav>
        <a href="/" class="logo">BYCIG MKT</a>

        <button class="nav-toggle" aria-label="Toggle navigation">
            <span class="hamburger"></span>
        </button>

        <ul class="nav-links">
            <?php if (isset($_COOKIE["session_id"])): ?>
                <li>
                    <a href="/proposals/submit">Create Proposal</a>
                </li>
                
                <li>
                    <form action="/auth/signout" method="POST">
                        <button id="signout-btn" type="submit">Sign out</button>
                    </form>  
                </li>  
            <?php else: ?>
                <li>
                    <a href="/auth/signin">Sign in</a>
                </li>

                <li>
                    <a href="/auth/signup">Sign up</a>
                </li>

                <li>
                    <a href="/auth/forgot-pwd">Forgot password?</a>
                </li>
            <?php endif; ?>
        </ul>

    </nav>

    <div class="nav-overlay"></div>

    <script src="/static/js/navbar.js"></script>
</html>