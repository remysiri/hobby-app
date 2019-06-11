<header>
    <section class="header__container">
        <nav>
            <li><a href="">Calendar</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Store</a></li>
            <?php if($_SESSION["logged"] == false): ?>
            <li><a href="">Login</a></li>
            <?php elseif($_SESSION["logged"] == true): ?>
            <li><a href="">Logout</a></li>
            <?php endif; ?>
        </nav>

        <div class="header__heading">
            <h1>Fast.<br>Survive.<br>Reflexes.</h1>
        </div>

        <div class="header__event-heading">
            <h2>Will you survive 2020?</h2>
            <p>Find out at our yearly tournament</p>

            <div class="header__event-button--container">
                <a href="">Buy tickets</a>
            </div>
        </div>
    </section>
</header>
<main>
    <section class="main__introduction">
        <div class="main__introduction-img">
            <img src="assets/img/cowboy.png"/>
        </div>
        <div class="main__introduction-content">
            <h1>Howdy, let me explain!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec odio nisl, convallis ut tincidunt at, vehicula in eros. Etiam commodo tincidunt vestibulum. <br>Aenean vestibulum arcu eu quam dapibus, vitae vehicula odio vulputate. Sed massa arcu, blandit quis diam vitae, ultricies vestibulum ligula. Duis sed eleifend risus, eu varius ex.</p>
        </div>

        <div class="main__activities-content">
            <h1>Howdy, let me explain!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec odio nisl, convallis ut tincidunt at, vehicula in eros. Etiam commodo tincidunt vestibulum. <br>Aenean vestibulum arcu eu quam dapibus, vitae vehicula odio vulputate. Sed massa arcu, blandit quis diam vitae, ultricies vestibulum ligula. Duis sed eleifend risus, eu varius ex.</p>
        </div>

        <div class="main__introduction-calendar">
            hhhhh
        </div>
    </section>

    <section class="main__gallery">

    </section>
</main>

<main>

</main>