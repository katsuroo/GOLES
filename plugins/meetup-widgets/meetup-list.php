<?php
global $events;

echo '<ul class="meetup_list">';
foreach ( $events as $event ) {
	printf(
		'<li>
            <div class="meetup-calendar">
                <div class="meetup-month">
                    %3$s
                </div>
                <div class="meetup-date">
                    %4$s
                </div>
            </div>
            <div class="meetup-info">
                <a class="meetup-name"href="%1$s">%2$s</a>
                <div class="meetup-time">%5$s</div>
            </div>
        </li>',
		esc_url( $event->event_url ),
		strip_tags( $event->name ),
		date( 'M', intval( $event->time/1000 + $event->utc_offset/1000 )),
        date( 'd', intval( $event->time/1000 + $event->utc_offset/1000 )),
        date('g:ia', intval( $event->time/1000 + $event->utc_offset/1000 ))
	);
}
echo '</ul>';
