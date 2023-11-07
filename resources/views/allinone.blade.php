<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MyIsekai Landing page</title>
    <link rel="stylesheet" href="aiostyle.css" />
</head>

<body>
    <div class="container">
        <section class="one" id="Home">
            <div class="container">
                <div class="navbar">
                    <a href="#Home">
                        <img src="logo2.jpg" class="logo" />
                    </a>
                    <nav>
                        <ul>
                            <li><a href="#about">About</a></li>
                            <li><a href="#btkn">Buy Tokens</a></li>
                            <li>
                                <a href="https://api.whatsapp.com/send/?phone=6281252265843&text&type=phone_number&app_absent=0"
                                    target="_blank">Contacts</a>
                            </li>
                            <li><a href="#login">Login</a></li>
                            <li><a href="#linkz" >Link Tugas</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="row">
                    <div class="col">
                        <h1>Landing Page</h1>
                        <p>Unlimited Internet Access</p>
                        <a href="#btkn">
                            <button type="button">Buy Tokens</button>
                        </a>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </section>
        <section class="two" id="about">
            <section class="about">
                <div class="main">
                    <img src="bout us.jpg" />
                    <div class="about-text">
                        <h1>Tentang Kami</h1>
                        <h5>MyIsekai Internet Access</h5>
                        <p>
                            MyIsekai berkomitmen untuk memberikan pelayanan yang terbaik
                            kepada pelanggan. Kami selalu berusaha untuk memberikan harga
                            yang terjangkau, layanan yang cepat dan mudah, serta layanan
                            yang ramah dan profesional. <br /><br />Visi MyIsekai adalah
                            menjadi penyedia layanan token listrik, pulsa, dan voucher
                            internet yang terpercaya dan berkualitas.
                        </p>
                    </div>
                </div>
            </section>
        </section>
        <section class="three" id="login">
            <div class="center">
                <h1>Login</h1>
                <form action="https://www.tokopedia.com/" method="post">
                    <div class="txt_field">
                        <input type="text" required />
                        <span></span>
                        <label>Username</label>
                    </div>
                    <div class="txt_field">
                        <input type="password" required />
                        <span></span>
                        <label>Password</label>
                    </div>
                    <div class="pass">Forgot Password?</div>
                    <input type="submit" value="Login" />
                    <div class="buy_token">
                        No Tokens? <a href="#btkn">Buy Tokens!</a>
                    </div>
                </form>
            </div>
        </section>
        <section class="foru" id="btkn">
            <div class="gallery">
                <div class="content">
                    <img src="inet.png" />
                    <p>1 Hour Package</p>
                    <h6>$5.00</h6>
                    <a href="https://www.tokopedia.com/" target="_blank">
                        <button class="buy1">Buy Now</button></a>
                </div>
                <div class="content">
                    <img src="inet.png" />
                    <p>1.5 Hour Package</p>
                    <h6>$7.50</h6>
                    <a href="https://www.tokopedia.com/">
                        <button class="buy2">Buy Now</button></a>
                </div>
                <div class="content">
                    <img src="inet.png" />
                    <p>2.5 Hour Package</p>
                    <h6>$10.00</h6>
                    <a href="https://www.tokopedia.com/"><button class="buy3">Buy Now</button></a>
                </div>
            </div>
        </section>
        <section class="linkz" id="linkz">
            <div class="tugasz">
                <a href="blog" target="_blank">Blog</a>
                <a href="hello" target="_blank">Hello</a>
                <a href="bootstrap" target="_blank">Bootstrap</a>
                <a href="Ltree" target="_blank">Link-Tree</a>
                <a href="js1" target="_blank">JavaScript 1</a>
                <a href="js2" target="_blank">JavaScript 2</a>
                <a href="responsive" target="_blank">Responsive</a>
            </div>
        </section>
    </div>
    <script>
        const body = document.body,
            scrollWrap = document.getElementsByClassName("smooth-vanilla")[0],
            height = scrollWrap.getBoundingClientRect().height - 1,
            speed = 0.04;

        var offset = 0;
        body.style.height = Math.floor(height) + "px";

        function smoothScroll() {
            offset += (window.pageYOffset - offset) * speed;

            var scroll = "translateY(-" + offset + "px) translateZ(0)";
            scrollWrap.style.transform = scroll;

            callScroll = requestAnimationFrame(smoothScroll);
        }

        smoothScroll();
    </script>
</body>

</html>
