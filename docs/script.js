$( document ).ready(function() {
    console.log( "ready!" );

    $('#feed').tweetie({
      "url": "api",
      "type": "timeline",
      "template": "<li>{{tweet.created_at}} - {{tweet.text}}</li>",
      "dateFormat": "%b %d, %Y",
      "params": {
        "count": 15
      }
    });
});
