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
            <p>Old Town Gunslingers Association is for people on search for a past-time and relaxing activities that would bring them back to the Old Western era 1880.<br><br> With us you would experience the kind of life they were experiencing and also be learning about roleplay which is portraying a character and acting as one, everything from gunfights to horse racing is possible and comes once in a while in the activities so check them often and keep yourself up to date!
            </p>
        </div>

        <div class="main__activities-content">
            <h1>Activities</h1>
            <p>To keep life entertaining we offer different kinds of activities for you, for those of us who likes to roleplay a lot more, ask and you shall recieve, for those of us who like to enjoy gunfights lots more or even stare out gundrawing duels we got these, we can offer up to everything till horse riding and so on.</p>
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
            <img src="https://1.bp.blogspot.com/-Fh9nRSQJs44/T3uJprwpMaI/AAAAAAAAAJw/j07mJK35q7I/s400/thomas_SAA.jpg"/>
        </div>
        <div class="itemgallery small-two">
            <img src="https://images.pexels.com/photos/2386728/pexels-photo-2386728.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"/>
        </div>
    </section>
</main>