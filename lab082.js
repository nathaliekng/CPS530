$(document).ready(
    function(){
        var text = 
        `{
            "response": {
                "data": {
                    "item": {
                        "title": "Yimago 2 / Hawaiian Music Radio",
                        "song": "Israel Kamakawiwo'ole - La 'Elima [1993]",
                        "track": {
                            "artist": "Israel Kamakawiwo'ole",
                            "title": "La 'Elima [1993]",
                            "album": "Somewhere over the Rainbow: The Best of Israel Kamakawiwo'ole",
                            "royaltytrackid": "0",
                            "started": "1574636195",
                            "id": "43140",
                            "length": "0",
                            "playlist": {
                                "id": "1579",
                                "title": "Y2 > General"
                            },
                            "buyurl": "",
                            "imageurl": "http://s20.postimg.cc/pfzynrf8d/iz5.jpg"
                        },
                        "bitrate": "64 Kbps",
                        "server": "Online",
                        "autodj": "Online",
                        "source": "Yes",
                        "offline": "",
                        "summary": {
                            "a": {
                                "-href": "http://199.195.194.92:2199/tunein/-stream/meyima03.pls",
                                "#text": "Yimago 2 / Hawaiian Music Radio - Israel Kamakawiwo'ole - La 'Elima [1993]"
                            }
                        },
                        "listeners": "5",
                        "maxlisteners": "100",
                        "reseller": "0",
                        "serverstate": "1",
                        "sourcestate": "1",
                        "sourceconn": "1",
                        "date": "Nov 24, 2019",
                        "time": "12:57 PM",
                        "rawmeta": "Israel Kamakawiwo'ole - La 'Elima [1993]",
                        "mountpoint": "/stream",
                        "tuneinurl": "http://199.195.194.94:8183/stream",
                        "directtuneinurl": "",
                        "proxytuneinurl": "",
                        "tuneinformat": "aac",
                        "webplayer": "muses",
                        "servertype": "ShoutCast2",
                        "listenertotal": "5",
                        "url": "http://199.195.194.92:2199/rpc"
                    }
                },
                "_type": "result"
            }
        }`;

        var obj = JSON.parse(text);
        $(".artist").html("Artist(s): " + obj.response.data.item.track.artist);
        $(".name").html("Song Name: " + obj.response.data.item.track.title);
        $(".pic").attr('src', obj.response.data.item.track.imageurl);
    }
);