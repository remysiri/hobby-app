
<main>

    <div class="filter">
        <form action="index.php?page=calendar" method="POST">
            <input type="text" name="keyword" placeholder="Keyword"/>
            <input type="date" name="date" placeholder="YYYY-MM-DD"/>
            <select name="category">
                <option value="">None</option>
                <option value="duel">Duel</option>
                <option value="trip">Trip</option>
                <option value="camp">Camp</option>
                <option value="horserace">Horserace</option>
                <option value="war">War</option>
                <option value="tournament">Tournament</option>
            </select>

            <button type="submit">Go</button>
        </form>
    </div>

    <div class="full__calendar">
        <ul>
            <?php foreach($events as $event): ?>
                <?php $date = DateTime::createFromFormat('Y-m-d', $event["start_date"]); ?>
                <li>
                    <div class="calendar-item">
                        <div class="calendar__date">
                            <p class="daymonth"><?php echo strtoupper($date->format('j M')); ?><span class="category"> <?php echo ucfirst($event["category"]); ?></span></p>
                        </div>

                        <div class="calendar__circle"></div>

                        <h2 class="calendar__content-title"><?php echo $event["name"]; ?></h2>
                        <p class="calendar__content-body"><?php echo $event["resume"]; ?></p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>


</main>