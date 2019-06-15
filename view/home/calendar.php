
<main>

    <div class="filter">
        <h1>Filter By</h1>
        <div class="filter__container">
            <form id="filterform" action="index.php?page=calendar" method="POST">
                <input type="text" name="keyword" id="keyword" placeholder="Keyword"/>
                <input type="date" name="date" id="filterdate" placeholder="YYYY-MM-DD"/>
                <select name="category" id="categoryfilter">
                    <option value="">None</option>
                    <option value="duel">Duel</option>
                    <option value="shooting">Shooting</option>
                    <option value="learning">Learning</option>
                    <option value="show-off">Show-off</option>
                    <option value="trip">Trip</option>
                    <option value="roleplay">Roleplay</option>
                    <option value="tournament">Tournament</option>
                </select>

                <button class="calendar-btn" type="submit">Filter</button>
            </form>
        </div>
    </div>

    <div class="full__calendar">
        <h1>Calendar</h1>
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