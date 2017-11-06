window.fbAsyncInit = function () {
    FB.init({
        appId: '1076443919158930',
        autoLogAppEvents: true,
        xfbml: true,
        version: 'v2.10'
    });
    FB.AppEvents.logPageView();
    loadEvents();
};

(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

var ids = {
    leeds: 'girlgangleeds',
    sheffield: 'girlgangsheffield',
    manchester: 'girlgangmcr'
};

var loadEvents = function () {
    FB.api(
        '/events',
        'GET',
        {
            "access_token": "1076443919158930|bD7Y_d0mReRRAOycQT9gEJd6ydE",
            "ids": ids.leeds + "," + ids.sheffield + "," + ids.manchester,
            "fields": "cover,name,start_time",
            "time_filter": "upcoming"
        },
        function (response) {
            var events = [];
            for (var id in ids) {
                if (ids.hasOwnProperty(id)) {
                    var thisCityEvents = response[ids[id]].data;
                    for (var i in thisCityEvents) {
                        var event = thisCityEvents[i];
                        event.date = new Date(event.start_time);
                        event.city = id;
                        events.push(event);
                    }
                }
            }

            var elements = [];
            events.sort(function (a,b) {
                return a.date - b.date;
            });
            var eventsPushed = [];
            for (var i in events) {
                var alreadyPushed = false;
                var event = events[i];
                for (var j = 0; j < eventsPushed.length; j++) {
                    var eventToCheck = eventsPushed[j];
                    if (eventToCheck.id === event.id) {
                        alreadyPushed = true;
                    }
                }
                if (!alreadyPushed) {
                    elements.push(generateEventAnchor(event));
                    eventsPushed.push(event);
                } else {
                    for (var k = 0; k < elements.length; k++) {
                        var element = elements[k];
                        if (element.id === event.id) {
                            element.getElementsByClassName('event-item__stripe')[0].innerHTML = 'Multiple';
                            element.className = 'event-item event-item--multiple';
                        }
                    }
                }
            }

            appendToEventsList(elements);
        }
    );
}

var generateEventAnchor = function (event) {
    var anchor = document.createElement('a');
    anchor.className = 'event-item event-item--' + event.city;
    if (event.cover) {
        anchor.style = 'background-image: url("' + event.cover.source + '")';
    }
    anchor.id = event.id;
    anchor.href = 'https://www.facebook.com/events/' + event.id;
    anchor.innerHTML = '<div class="event-item__stripe-container"><div class="event-item__stripe">'
        + event.city
        + '</div></div><div class="event-item__details">'
        + '<h3 class="event-item__title">'
        + stripFromName(event.name, event.city)
            .replace(event.city.charAt(0).toUpperCase() + event.city.slice(1) + ': ', '')
        + '</h3><p class="event-item__date">'
        + dateFns.format(event.date, 'dddd Do MMM [@] ha')
        + '</p></div>';
    return anchor;
}

var stripFromName = function (name, city) {
    var toStripList = [
        'Girl Gang ',
        'girl gang ',
        'Girl gang ',
        'girl Gang ',
        'Girl Gang: ',
        'girl gang: ',
        'Girl gang: ',
        'girl Gang: ',
        city.charAt(0).toUpperCase() + city.slice(1) + ': '
    ];
    var processedName = name;
    for (var i = 0; i < toStripList.length; i++) {
        var toStrip = toStripList[i];
        if (processedName.indexOf(toStrip) === 0) {
            processedName = processedName.replace(toStrip, '');
        }
    }
    return processedName;
}

var appendToEventsList = function (elements) {
    var list = document.getElementsByClassName('events__list')[0];
    list.innerHTML = '';
    for (var i in elements) {
        list.appendChild(elements[i]);
    }
}
