<style type="text/css">
    table.ui-datepicker-calendar td {
        font-size: .9em !important;
        line-height: normal !important;;
        padding: 0px !important;;
    }
    body {
        margin: auto;
        width: 1000px;
    }
</style>

<div>
    <h3>Take the guesswork out of your time zone calculations with TimeWobble.</h3>
    <div>
        <p style="text-align: left;">TimeWobble calculates the <strong>time</strong> for a <strong>remote
                location </strong>based on the time of your <em>local</em> location at a specified date. That could be
            right now, or next week, or next year.</p>
    </div>
</div>

<div>
    <div>
        <p>Upgrade your office with this 24 inch world clock.</p>
    </div>
</div>

<div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="timer-box table-responsive">
                    <fieldset>
                        <div class="mb-3"><label class="form-label" for="localDate"><b>Primary</b> date</label>
                            <input title="select date" id="localDate" class="form-control" type="date"></div>
                    </fieldset>
                </div>
            </div>
            <div class="col-lg-7">
            </div>
        </div>
        <div class="row location">
            <div class="col-lg-5">
                <div class="timer-box primary table-responsive">
                    <fieldset>
                        <div class="mb-3">
                            <label class="form-label"><b>Primary</b> location</label>
                            <label class="form-label">City Name</label>
                            <label id="timezone_place_switcher" class="switch"><input type="checkbox">
                                <span class="slider round"></span></label>
                            <label class="form-label">Timezone</label>
                            <div class="input-group">
                                <div class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#0b71b9"
                                         class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                                    </svg>
                                </div>
                                <input class="form-control location_address pac-target-input" type="text"
                                       placeholder="" autocomplete="off">
                                <input class="location_coordinates" type="hidden"
                                       value="{}">
                                <input class="time_offset" type="hidden" value="7200">
                                <input class="timezone_id" type="hidden" value="Europe/Kiev">
                                <input class="timezone_name" type="hidden" value="Eastern European Standard Time">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <table class="table align-middle table-borderless">
                            <tbody>
                            <tr class="txt">
                                <td width="20%"></td>
                                <td width="20%">hh</td>
                                <td width="5%"></td>
                                <td width="20%">mm</td>
                                <td width="15%"></td>
                                <td width="20%"></td>
                            </tr>
                            <tr class="timer">
                                <td>
                                    <button title="Add hours" class="btn btn-tm-mn minus" type="button">-</button>
                                </td>
                                <td><b class="hours"></b></td>
                                <td><b>:</b></td>
                                <td><b class="minutes"></b></td>
                                <td class="ampm"></td>
                                <td>
                                    <button title="Add minutes" class="btn btn-tm-pl plus" type="button">+</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <p class="text-center secondary-txt"><span class="location_date"></span><span> - </span>
                        </p>
                    </fieldset>
                </div>
            </div>
            <div class="col-lg-2 text-center p-0 d-none d-lg-block">
                <div class="row">
                    <div class="col-12" style="border-bottom:2px solid #ccc;height: 60px;"></div>
                    <div class="col-12">
                        <p class="text-center secondary-txt hours_difference">-7 hours</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="timer-box table-responsive">
                    <fieldset>
                        <div class="mb-3">
                            <label class="form-label"><b>Remote</b> location</label>
                            <div class="input-group">
                                <button title="Make primary location" id="input-action"
                                        class="btn btn-outline-secondary primary_location" type="button"
                                        style="padding: 11px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                                         class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                                    </svg>
                                </button>
                                <input class="location_address form-control pac-target-input" type="text"
                                       aria-label="Text input with dropdown button" placeholder=""
                                       autocomplete="off">
                                <input class="location_coordinates" type="hidden"
                                       value="{}">
                                <input class="time_offset" type="hidden" value="">
                                <input class="timezone_id" type="hidden" value="">
                                <input class="timezone_name" type="hidden" value="">
                            </div>
                            <p class="secondary-txt bl-cl">Make primary location</p>
                        </div>
                    </fieldset>
                    <fieldset>
                        <table class="table align-middle table-borderless">
                            <tbody>
                            <tr class="txt">
                                <td width="20%"></td>
                                <td width="20%">hh</td>
                                <td width="5%"></td>
                                <td width="20%">mm</td>
                                <td width="15%"></td>
                                <td width="20%"></td>
                            </tr>
                            <tr class="timer">
                                <td>
                                    <button class="invisible btn btn-secondary" type="button">-</button>
                                </td>
                                <td><b class="hours"></b></td>
                                <td><b>:</b></td>
                                <td><b class="minutes"></b></td>
                                <td class="ampm"></td>
                                <td>
                                    <button class="invisible btn btn-secondary" type="button">+</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <p class="text-center secondary-txt"><span class="location_date"></span><span> - </span>
                        </p>
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="row location" style="display:none">
            <div class="col-lg-7 p-0 d-none d-lg-block">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-8" id="line-border"></div>
                    <div class="col-12">
                        <p class="text-center secondary-txt hours_difference" style="padding-left: 30%;"></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="timer-box table-responsive">
                    <fieldset>
                        <div class="mb-3">
                            <label class="form-label"><b>Remote</b> location</label>
                            <span style="float:right;">
                                <button title="Delete location" class="input-action delete_location">Delete
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#bababa"
                                         class="bi bi-dash-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"></path>
                                    </svg>
                                </button>
                            </span>
                            <div class="input-group">
                                <button title="Make primary location" id="input-action"
                                        class="btn btn-outline-secondary primary_location" type="button"
                                        style="padding: 11px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                                         class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                                    </svg>
                                </button>
                                <input class="location_address form-control pac-target-input" type="text"
                                       placeholder="Введите местоположение" autocomplete="off">
                                <input class="location_coordinates" type="hidden" value="">
                                <input class="time_offset" type="hidden" value="">
                                <input class="timezone_id" type="hidden" value="">
                                <input class="timezone_name" type="hidden" value="">
                            </div>
                            <p class="secondary-txt bl-cl">Make primary location</p>
                        </div>
                    </fieldset>
                    <fieldset>
                        <table class="table align-middle table-borderless">
                            <tbody>
                            <tr class="txt">
                                <td width="20%"></td>
                                <td width="20%">hh</td>
                                <td width="5%"></td>
                                <td width="20%">mm</td>
                                <td width="15%"></td>
                                <td width="20%"></td>
                            </tr>
                            <tr class="timer">
                                <td>
                                    <button class="invisible btn btn-secondary" type="button">-</button>
                                </td>
                                <td><b class="hours">12</b></td>
                                <td><b>:</b></td>
                                <td><b class="minutes">20</b></td>
                                <td class="ampm"></td>
                                <td>
                                    <button class="invisible btn btn-secondary" type="button">+</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <p class="text-center secondary-txt"><span class="location_date"></span><span></span></p>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>


    <div class="col-12 text-center">
        <button id="addLocBtn">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg"
                     viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"></path>
                </svg>
            </span>
            <span>Add Location</span>
        </button>

    </div>

</div>

<div class="pac-container pac-logo" style="width: 366px; position: absolute; left: 463px; top: 549px; display: none;">
    <div class="pac-item">
        <span class="pac-icon pac-icon-marker"></span>
        <span class="pac-item-query">
            <span class="pac-matched">Львов</span>
        </span>
        <span>
            <span class="pac-matched">Львовская область</span>,
            <span class="pac-matched">Украина</span>,
            <span class="pac-matched">79000</span>
        </span>$gmap_api_key
    </div>
</div>
<div class="pac-container pac-logo" style="display: none;">

</div>
<div class="pac-container pac-logo" style="display: none;">
</div>

</div>

<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $gmap_api_key; ?>&libraries=places"></script>
<script type="text/javascript">
    const timezoneList = <?php echo json_encode($timezones, JSON_UNESCAPED_SLASHES); ?>;
    const timezoneById = <?php echo json_encode($timezoneById, JSON_UNESCAPED_SLASHES); ?>;
    let geocoder;
    const timezoneMode = localStorage.getItem('timezone_mode') === 'true';

    initMap();

    function initMap() {
        const gmapApiKey = '<?php echo $gmap_api_key; ?>';
        geocoder = new google.maps.Geocoder();
        jQuery(document).ready(function ($) {
            const $localDatePicker = $('input#localDate');
            const $localTimerBox = $('div.row.location div.timer-box.primary');
            const $localLocation = $localTimerBox.find('input.location_address');
            const $localCoordinates = $localTimerBox.find('input.location_coordinates');
            const $localTime = $localTimerBox.find('tr.timer');
            const $localTimeOffset = $localTimerBox.find('input.time_offset');
            const $localTimeZoneId = $localTimerBox.find('input.timezone_id');
            const $localTimeZoneName = $localTimerBox.find('input.timezone_name');
            const $localDate = $localTimerBox.find('.location_date');

            $('div.row.location').each(function () {
                handleLocationEvents($(this));
            });

            $('#addLocBtn').click(function () {
                addNewRemoteLocation();
            });

            $localDatePicker.change(function () {
                const d = new Date(this.value);
                const locTime = getLocalTime();
                d.setHours(locTime.getHours());
                d.setMinutes(locTime.getMinutes());
                setLocalTime(d);
                setRemoteLocationsTime();
            });

            $('#timezone_place_switcher input').change(function () {
                localStorage.setItem('timezone_mode', $(this).is(':checked') ? true : false);
                deleteLocations();
                window.location.reload();
            });

            if (timezoneMode) {
                $('#timezone_place_switcher input').prop('checked', true);
            }

            const today = new Date();
            const defaultLocalTimeOffset = -(today.getTimezoneOffset() * 60);
            $localTimeOffset.val(defaultLocalTimeOffset);
            setLocalTime(today);
            let todayMonth = today.getMonth() + 1;
            if (todayMonth < 10) todayMonth = '0' + todayMonth;
            let todayDate = today.getDate();
            if (todayDate < 10) todayDate = '0' + todayDate;
            $localDatePicker.val(today.getFullYear() + '-' + todayMonth + '-' + todayDate);

            let savedLocations = localStorage.getItem('locations');
            if (savedLocations) {
                savedLocations = JSON.parse(savedLocations);
                let locIndex = 0;
                $('div.row.location div.timer-box').each(function (index, obj) {
                    if (savedLocations[locIndex]) {
                        if (index == 2) {
                            $(obj).closest('div.row.location').show();
                        }
                        setDefaultRemoteLocation(index, $(obj), savedLocations[locIndex]);
                        locIndex++;
                    }
                });
                for (let i = locIndex; i < savedLocations.length; i++) {
                    addNewRemoteLocation(savedLocations[i]);
                }
            } else {
                let defaultLocalLocation;
                if (!timezoneMode) {
                    defaultLocalLocation = "<?php echo $geo->city->name . ', ' . $geo->country->name ?>";
                    geocode(defaultLocalLocation, function (result) {
                        if (result.results.length) {
                            $localLocation.val(defaultLocalLocation);
                            onPlaceChanged(result.results[0], $localTimerBox);
                        }
                    });
                } else {
                    let timezoneId = Intl.DateTimeFormat().resolvedOptions().timeZone;
                    let timezone;
                    if (timezoneById[timezoneId]) {
                        timezone = timezoneById[timezoneId];
                    } else {
                        timezone = 'Mountain Standard Time';
                        timezoneId = timezoneList[defaultLocalLocation];
                    }
                    $localLocation.val(timezone);
                    onTimezoneChanged(timezoneId, timezone, $localTimerBox);
                }

                $('div.row.location:visible div.timer-box').not('.primary').each(function (index, obj) {
                    setDefaultRemoteLocation(index, $(obj));
                });
            }

            function addNewRemoteLocation(locAddress = null) {
                const locationIndex = $('div.row.location:visible div.timer-box').not('.primary').length;
                const $locationBlock = $('div.row.location').eq(1);
                let $newLocationBlock;
                if ($locationBlock.is(":hidden")) {
                    $locationBlock.show();
                    $newLocationBlock = $locationBlock;
                } else {
                    $newLocationBlock = $($locationBlock.get(0).outerHTML);
                    handleLocationEvents($newLocationBlock);
                }
                $locationBlock.parent().append($newLocationBlock);
                setDefaultRemoteLocation(locationIndex, $newLocationBlock, locAddress);
            }

            function handleLocationEvents($locationBlock) {
                $locationBlock.find('.timer-box').each(function () {
                    const $this = $(this);
                    $this.find('.primary_location').click(function () {
                        setPrimaryLocation($this);
                    });
                    const options = {
                        strictBounds: true,
                        types: ['(cities)'],
                    };
                    if (!timezoneMode) {
                        const autocomplete = new google.maps.places.Autocomplete($this.find('input.location_address').get(0), options);
                        autocomplete.addListener('place_changed', function () {
                            const place = autocomplete.getPlace();
                            if (place.geometry) {
                                onPlaceChanged(place, $this);
                            }
                        });
                    } else {
                        $this.find("input.location_address").autocomplete({
                            source: Object.keys(timezoneList),
                            select: function (ev, ui) {
                                let timezoneName = ui.item.value;
                                let timezoneId = timezoneList[timezoneName];
                                onTimezoneChanged(timezoneId, timezoneName, $this);
                            }
                        });
                    }
                    $locationBlock.find('.delete_location').click(function () {
                        if ($('div.row.location').length < 3) {
                            $locationBlock.hide();
                        } else {
                            $locationBlock.remove();
                        }
                        saveLocations();
                    });
                });
            }

            function onPlaceChanged(place, $timerBox) {
                const $this = $(this);
                setLocationName($timerBox);
                const locationJson = JSON.stringify(place.geometry.location);
                const $coordinates = $timerBox.find('input.location_coordinates');
                if ($coordinates.val() != locationJson) {
                    $coordinates.val(locationJson);
                    timezone(place.geometry.location, function (result) {
                        $timerBox.find('input.timezone_id').val(result.timeZoneId);
                        $timerBox.find('input.timezone_name').val(result.timeZoneName);
                        setLocationName($timerBox);
                        const offset = result.rawOffset + result.dstOffset;
                        const $offset = $timerBox.find('input.time_offset');
                        let currentOffset = $offset.val();
                        if (currentOffset) currentOffset = parseInt(currentOffset);
                        if (currentOffset !== offset) {
                            $offset.val(offset);
                            if ($localTimeOffset.val()) {
                                let localTime;
                                if ($timerBox.hasClass('primary')) {
                                    localTime = new Date();
                                    localTime.setTime(localTime.getTime() + ($localTimeOffset.val() - defaultLocalTimeOffset) * 1000);
                                    setLocalTime(localTime);
                                    setRemoteLocationsTime();
                                } else {
                                    setRemoteTime(getLocalTime(), $timerBox);
                                }
                            }
                        }
                    });
                }

                saveLocations();
                localStorage.setItem('local_time', getLocalTime().getTime());
            }

            function onTimezoneChanged(timeZoneId, timeZoneName, $timerBox) {
                const $this = $(this);
                $timerBox.find('input.timezone_id').val(timeZoneId);
                $timerBox.find('input.timezone_name').val(timeZoneName);
                setLocationName($timerBox);
                getTimeZoneOffset(timeZoneId, getLocalTime().getTime() / 1000, function (result) {
                    let offset = result.offset;
                    let $offset = $timerBox.find('input.time_offset');
                    let currentOffset = $offset.val();
                    if (currentOffset) currentOffset = parseInt(currentOffset);
                    if (currentOffset !== offset) {
                        $offset.val(offset);
                        if ($localTimeOffset.val()) {
                            let localTime;
                            if ($timerBox.hasClass('primary')) {
                                localTime = new Date();
                                localTime.setTime(localTime.getTime() + ($localTimeOffset.val() - defaultLocalTimeOffset) * 1000);
                                setLocalTime(localTime);
                                setRemoteLocationsTime();
                            } else {
                                setRemoteTime(getLocalTime(), $timerBox);
                            }
                        }
                    }
                });
                setTimeout(function () {
                    saveLocations();
                }, 200);
                localStorage.setItem('local_time', getLocalTime().getTime());
            }

            function saveLocations() {
                let currentLocations = [];
                $('div.row.location div.timer-box').each(function () {
                    if (!$(this).is(":hidden")) {
                        currentLocations.push($(this).find('input.location_address').val());
                    }
                });
                localStorage.setItem('locations', JSON.stringify(currentLocations));
            }

            function deleteLocations() {
                localStorage.setItem('locations', null);
                localStorage.removeItem('locations');
            }

            function setRemoteLocationsTime() {
                $('div.row.location div.timer-box:visible').not('.primary').each(function () {
                    setRemoteTime(getLocalTime(), $(this));
                });
            }

            function setDefaultRemoteLocation(boxIndex, $tBox, value = null) {
                if (!value) {
                    let locationList;
                    if (!timezoneMode) {
                        locationList = ['New York', 'London', 'Amsterdam', 'Tokyo', 'Johannesburg'];
                    } else {
                        locationList = ['US Eastern Standard Time', 'US Mountain Standard Time', 'Pacific Standard Time'];
                    }
                    if (boxIndex > locationList.length) {
                        boxIndex = boxIndex % locationList.length;
                    }
                    if (!locationList[boxIndex]) boxIndex = 0;
                    value = locationList[boxIndex];
                }
                if (!timezoneMode) {
                    geocode(value, function (result) {
                        if (result.results.length) {
                            $tBox.find('input.location_address').val(result.results[0].formatted_address);
                            onPlaceChanged(result.results[0], $tBox);
                        }
                    });
                } else {
                    $tBox.find('input.location_address').val(value);
                    onTimezoneChanged(timezoneList[value], value, $tBox);
                }
            }

            function setPrimaryLocation($tBox) {
                const $remoteLocation = $tBox.find('input.location_address');
                const $remoteCoordinates = $tBox.find('input.location_coordinates');
                const $remoteTimeOffset = $tBox.find('input.time_offset');
                const $remoteTimeZoneId = $tBox.find('input.timezone_id');
                const $remoteTimeZoneName = $tBox.find('input.timezone_name');
                const localLocationAddress = $localLocation.val().trim();
                $localLocation.val($remoteLocation.val().trim());
                $remoteLocation.val(localLocationAddress);
                const localCoordinates = $localCoordinates.val();
                $localCoordinates.val($remoteCoordinates.val());
                $remoteCoordinates.val(localCoordinates);
                const localTimeOffset = $localTimeOffset.val();
                $localTimeOffset.val($remoteTimeOffset.val());
                $remoteTimeOffset.val(localTimeOffset);
                const localTimeZoneId = $localTimeZoneId.val();
                $localTimeZoneId.val($remoteTimeZoneId.val());
                $remoteTimeZoneId.val(localTimeZoneId);
                const localTimeZoneName = $localTimeZoneName.val();
                $localTimeZoneName.val($remoteTimeZoneName.val());
                $remoteTimeZoneName.val(localTimeZoneName);
                setLocationName($localTimerBox);
                setLocationName($tBox);
                setLocalTime(getRemoteTime($tBox));

                setRemoteLocationsTime();
            }

            $localTime.find('button.plus, button.minus').click(function () {
                let margin = $(this).hasClass('plus') ? 30 : -30;
                const d = getLocalTime();
                const minutes = d.getMinutes();
                if (margin >= 0) {
                    margin = minutes >= margin ? 2 * margin - minutes : margin - minutes;
                } else {
                    margin = minutes == 0 || minutes > Math.abs(margin) ? Math.abs(margin) - minutes : -minutes;
                    if (margin > 0) margin = -margin;
                }
                if (d) {
                    d.setMinutes(minutes + margin);
                    setLocalTime(d);
                }
                setRemoteLocationsTime();
            });

            function geocode(address, callback) {
                geocoder.geocode({address: address})
                    .then((result) => {
                        if (callback) {
                            callback(result);
                        }
                    })
                    .catch((e) => {
                        alert("Geocode was not successful for the following reason: " + e);
                    });
            }

            function timezone(coordinates, callback) {
                $.get('https://maps.googleapis.com/maps/api/timezone/json?location=' + encodeURIComponent(coordinates.lat() + ',' + coordinates.lng()) + '&timestamp=' + (Date.now() / 1000) + '&key=' + gmapApiKey, function (result) {
                    callback(result);
                });
            }

            function getTimeZoneOffset(timezoneId, timeStamp, callback) {
                $.get('<?php echo plugins_url('timezone_offset.php?timezone=', __DIR__); ?>' + timezoneId + '&date=' + timeStamp, function (result) {
                    callback(result);
                });
            }

            function getLocalTime() {
                return getLocationTime($localTimerBox, $localDate);
            }

            function getRemoteTime($tBox) {
                return getLocationTime($tBox);
            }

            function getLocationTime($timerBox, $dateItem = null) {
                if (!$dateItem) {
                    $dateItem = $timerBox.find('.location_date');
                }
                if (!$dateItem.text()) {
                    return null;
                }
                const $timeItem = $timerBox.find('tr.timer');
                const d = new Date($dateItem.text());
                const ampm = $timeItem.find('.ampm').text().toLowerCase();
                let hours = parseInt($timeItem.find('.hours').text(), 10);
                let minutes = parseInt($timeItem.find('.minutes').text(), 10);
                if (ampm == 'am' && hours == 12) {
                    hours = 0;
                } else if (ampm == 'pm' && hours !== 12) {
                    hours = hours + 12;
                }
                d.setHours(hours);
                d.setMinutes(parseInt($timeItem.find('.minutes').text()));
                d.setSeconds(0);
                return d;
            }

            function setLocalTime(d) {
                setLocationTime($localTimerBox, d);
            }

            function setRemoteTime(dLocal, $tBox) {
                const $remoteTimeOffset = $tBox.find('input.time_offset');
                if ($remoteTimeOffset.val() !== '') {
                    const remoteTimezoneId = $tBox.find('input.timezone_id').val();
                    if (remoteTimezoneId) {
                        const localTimeStamp = dLocal.getTime();
                        $.get({
                                url: '<?php echo plugins_url('timezone_offset.php?timezone=', __DIR__); ?>' + remoteTimezoneId + '&date=' + (localTimeStamp / 1000),
                                dataType: 'json'
                            },
                            function (result) {
                                if (result.offset !== undefined) {
                                    $remoteTimeOffset.val(result.offset);
                                    const intervalInSec = $remoteTimeOffset.val() - $localTimeOffset.val();
                                    const remoteTime = new Date();
                                    remoteTime.setTime(localTimeStamp + intervalInSec * 1000);
                                    setLocationTime($tBox, remoteTime);
                                }
                            });
                    }
                }
            }

            function setLocationTime($timerBox, d) {
                const $timeItem = $timerBox.find('tr.timer');
                const timeTxt = d.toLocaleString('en-US', {hour: 'numeric', minute: 'numeric', hour12: true});
                const matches = timeTxt.match(/^([0-9]+):([0-9]+)\s+([a-zA-Z]+)$/);
                let hours = matches[1];
                if (hours < 10) hours = '0' + hours;
                let minutes = matches[2];
                const ampm = matches[3];
                $timeItem.find('.hours').text(hours);
                $timeItem.find('.minutes').text(minutes);
                $timeItem.find('.ampm').text(ampm.toUpperCase());
                if ($timerBox.hasClass('primary')) {
                    $localDate.text(d.toDateString());
                } else {
                    const $remoteDate = $timerBox.find('.location_date')
                    $remoteDate.text(d.toDateString());
                    const $remoteTimeOffset = $timerBox.find('input.time_offset');
                    const $locationHoursDifference = $timerBox.closest('div.row.location').find('.hours_difference');
                    if ($localTimeOffset.val() && $remoteTimeOffset.val()) {
                        $locationHoursDifference.text((($remoteTimeOffset.val() - $localTimeOffset.val()) / 3600) + ' hours');
                    }
                }
            }

            function setLocationName($timerBox) {
                let locationAddress = $timerBox.find('input.location_address').val().trim();
                if (locationAddress) locationAddress = locationAddress.trim();
                let timeZone = $timerBox.find('input.timezone_name').val();
                if (timeZone) timeZone = timeZone.trim();
                const $locationDate = $timerBox.find('.location_date');
                if (locationAddress) {
                    let address = [locationAddress];
                    if (timeZone) {
                        address.push(timeZone);
                    }
                    $locationDate.next().text(' - ' + address.join(', '));
                } else {
                    $locationDate.next().text('');
                }
            }

        });
    }

</script>
<?php if (isset($_POST['extract_error'])) {
    ?><b style="color:red"><?php echo $_POST['extract_error']; ?></b><?php
} ?>