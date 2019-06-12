
<main>

    <div class="filter"></div>

    <div class="full__calendar">
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


</main>