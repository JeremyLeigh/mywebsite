
(function () {
     "use strict";
  var username = document.querySelector("#Uname");
  var password = document.querySelector("#Passw");
  var next = document.querySelector("#nextBtn");
  var submit = document.querySelector("#subBtn");
  var image = document.querySelector("#profilePic");
  var userVar = "<?php echo $username; ?>";
  var httpRequest;

//Ajax profile picture work

/*      function makeRequest() {
        httpRequest = new XMLHttpRequest();

		if(!httpRequest){
			console.log('Request not completed.');
			return false;
		}
		httpRequest.onreadystatechange = showHide;
		httpRequest.open('GET', 'includes/ajaxQuery.php' + '?user_name=' + userVar);
		httpRequest.send();
	}

        function showHide() {
          if(httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200){
          			var picData = JSON.parse(httpRequest.responseText);
          	image.src = "images/profiles/" + picData.user_pic;
            console.log("hello");
          		}
        */

        function makeRequest() {
        username.type = "hidden";
        password.type = "text";
        submit.classList.remove("hidden");
        next.classList.add("hidden");

      }


  next.addEventListener("click", makeRequest, false);
})();
