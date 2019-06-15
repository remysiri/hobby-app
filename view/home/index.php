<header>
    <section class="header__container">
        <div class="header__heading">
            <h1>Fast.<br>Survive.<br>Reflexes.</h1>
        </div>

        <div class="header__event-heading">
            <h2>Will you survive 2020?</h2>
            <p>Find out at our yearly tournament</p>

            <div class="header__event-button--container">
                <a href="index.php?page=store">Buy tickets</a>
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
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec odio nisl, convallis ut tincidunt at, vehicula in eros. Etiam commodo tincidunt vestibulum. <br><br>Aenean vestibulum arcu eu quam dapibus, vitae vehicula odio vulputate. Sed massa arcu, blandit quis diam vitae, ultricies vestibulum ligula. Duis sed eleifend risus, eu varius ex.</p>
        </div>

        <div class="main__activities-content">
            <h1>Howdy, let me explain!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec odio nisl, convallis ut tincidunt at, vehicula in eros. Etiam commodo tincidunt vestibulum. <br>Aenean vestibulum arcu eu quam dapibus, vitae vehicula odio vulputate. Sed massa arcu, blandit quis diam vitae, ultricies vestibulum ligula. Duis sed eleifend risus, eu varius ex.</p>
        </div>

        <div class="main__introduction-calendar">
            <ul>
                <?php foreach($events as $event): ?>
                <?php $date = DateTime::createFromFormat('Y-m-d', $event["start_date"]); ?>
                <li>
                    <div class="calendar-item">
                        <div class="calendar__date">
                            <p class="month"><?php echo strtoupper($date->format('M')); ?></p>
                            <p class="day"><?php echo strtoupper($date->format('j')); ?></p>
                        </div>

                        <div class="calendar__circle"></div>

                        <h2 class="calendar__content-title"><?php echo $event["name"]; ?></h2>
                        <p class="calendar__content-body"><?php echo $event["resume"]; ?></p>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <section class="main__gallery">
        <div class="itemgallery big">
            <img src="https://images.pexels.com/photos/1069730/pexels-photo-1069730.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"/>
        </div>
        <div class="itemgallery small-one">
            <img src="https://images.pexels.com/photos/2386728/pexels-photo-2386728.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"/>
        </div>
        <div class="itemgallery small-two">
            <img src="https://images.pexels.com/photos/2386728/pexels-photo-2386728.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"/>
        </div>
    </section>
</main>