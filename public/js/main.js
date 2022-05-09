var rightAnswerNum, newLatitude = 0, newLongitude = 0, oldLatitude, oldLongitude, zoom;

var picHolder = new Vue({
  el: '#picHolder',
  data: {
    opacity: "0",
    display: "block",
    height:  "",
    width:   "",
    bgImage: "",
  },
})

var answers = new Vue({
  el: '#answers',
  data: {
    opacity: "0",
    display: "block",
    choices: []
  },
  methods: {
    checkAnswer: function (answer) {
      map.display = "block";
      map.opacity = "1";
      setTimeout(mapZoomOut, 2000); // do after quiz fades out, which takes 2 seconds

      answers.opacity = "0";
      setTimeout(function () { answers.display = "none"; }, 3000); // do after answer fades out, which takes 3 seconds

      picHolder.opacity = "0";
      setTimeout(function () { picHolder.display = "none"; }, 3000); // do after pic fades out, which takes 3 seconds

      // Try to get result to appear after the map has shown which country the garden is in. So the user can tell from the map whether they're correct.
      setTimeout(function () {
        result.display = "block";
      }, 12000);
      /* change display to block before changing opacity, otherwise it doesn't fade in */
      setTimeout(function () {
        result.opacity = "0.75";
      }, 13000);

      if (answer == rightAnswerNum) {
        result.displayRight = "block";
        result.displayWrong = "none";
      } else {
        result.displayWrong = "block";
        result.displayRight = "none";
      }
    }
  }
})

var result = new Vue({
  el: '#result',
  data: {
    opacity:       "0",
    display:       "none",
    displayRight:  "",
    displayWrong:  "",
    rightName:     "",
    fact:          "",
    learnMoreLink: "",
    ctaText:       "",
  },
  methods: {
    // When user clicks inside the result modal but not on the 'learn more' link, then close the result modal    
    afterResult: function (event) {
      if (event.target != document.getElementById("learnMoreLink")) {
        loadNext();
      }
    }
  }
})

var map = new Vue({
  el: '#cesiumMap',
  data: {
    display: "none",
    opacity: "0",
  },
  methods: {
    // When user clicks anywhere outside the result modal, close the result modal and load the next question image
    afterResult: function () {
      loadNext();
    }
  }
})





function load () {
  // AJAX API call to get data from DB via PHP
  fetch('https://happilygardening.com/getData.php')
    .then(response => response.json())
    .then(data => {
      rightAnswerNum       = data.rightAnswerPosition;
      answers.choices      = data.answer;
      result.fact          = data.fact;
      result.learnMoreLink = data.rightAnswer[4];
      result.ctaText       = data.ctaText;
      result.rightName     = "Wrong sorry, it's <br>" + data.rightAnswerName;
      oldLatitude          = newLatitude;
      oldLongitude         = newLongitude;
      newLatitude          = data.latitude;
      newLongitude         = data.longitude;
      zoom                 = data.zoom;

      // Fade in answer buttons after x seconds
      setTimeout(function(){ answers.opacity = "1"; }, 1000);

      // load image as background first because of some reason i can't remember but it was important so check it before changing it
      picHolder.bgImage = "url(images/" + data.rightAnswer[5] + "/" + data.rightImage + ".jpg)";

      var img = new Image();
      img.onload = function () { 
        picHolder.opacity = "1";
        picHolder.width   = img.width + "px";

        // if background image gets shrunk then re-size fuzzy border accordingly
        if (document.body.clientWidth < img.width) {
          picHolder.height = Math.ceil((document.body.clientWidth / img.width) * img.height) + "px";
        } else {
          picHolder.height  = img.height + "px";
        }
      };

      img.src = "images/" + data.rightAnswer[5] + "/" + data.rightImage + ".jpg";
  });
}

function loadNext () {
  answers.display   = "block";
  picHolder.display = "block";
  result.opacity    = "0";
  map.opacity       = "0";

  setTimeout(function () {
    result.display = "none";
    map.display    = "none";
    load();
  }, 2000); // do after result fades out, which takes 2 seconds
}
