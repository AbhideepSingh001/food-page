<style>
    * {
        margin: 0;
        padding: 0;
        font-family: "Times New Roman", Georgia, serif;
    }

    .top-header {
        background-color: rgb(33 120 255);
        border-bottom: 1px solid white;
        position: sticky;
        top: 0;
        z-index: 1050;
    }

    .top-header .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }

    /* Left Info */

    .top-header .container .contact-info {
        display: flex;
        gap: 25px;
        color: white;
        font-size: 14px;
    }

    .top-header .container .contact-info span {
        cursor: pointer;
    }

    /* Menu */

    .top-header .container .menu {
        display: flex;
        gap: 30px;
    }

.top-header .container .menu a {
        text-decoration: none;
        color: white;
        font-size: 15px;
        font-weight: 500;
        transition: 0.3s;
    }

    .top-header .container .menu a:hover {
        color: #ffe082;
    }

    /* Mobile */

    @media(max-width:768px) {

        .contact-info {
            display: none;
        }

        .top-header .container .menu {
            width: 100%;
            justify-content: center;
            padding-top: 5px;
        }

    }
</style>



<header>

    <div class="top-header py-2">

        <div class="container">

            <!-- Left Contact Info -->

            <div class="contact-info">

                <span>
                    <i class="fa-solid fa-location-dot me-1"></i>
                    Udaipur, Rajasthan
                </span>

                <span>
                    <i class="fa-solid fa-phone me-1"></i>
                    +91 98765 43210
                </span>

                <span>
                    <i class="fa-solid fa-envelope me-1"></i>
                    info@deliciousfood.com
                </span>

            </div>


            <!-- Right Menu -->

            <div class="menu">

                <a href="/">Home</a>

                <a href="/about">About</a>

                <a href="/services">Dishes</a>

                <a href="/contact">Contact</a>

            </div>

        </div>

    </div>

</header>