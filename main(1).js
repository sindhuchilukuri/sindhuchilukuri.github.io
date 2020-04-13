
function check(){

	var question1 = document.quiz.question1.value;
	var question2 = document.quiz.question2.value;
	var question3 = document.quiz.question3.value;
	var question4 = document.quiz.question4.value;
	var question5 = document.quiz.question5.value;
	var correct = 0;


	if (question1 == "Lewis Carroll") {
		correct++;
}
	if (question2 == "Peter Pan") {
		correct++;
}	
	if (question3 == "Scottish") {
		correct++;
	}

	if (question4 == "Charlotte") {
		correct++;
	}

	if (question5 == "Schoolboys on the desert island") {
		correct++;
	}
	
	var pictures = ["img/win.gif", "img/meh.jpeg", "img/lose.gif"];
	var messages = ["Great job!", "That's just okay", "You really need to do better"];
	var score;

	if (correct == 0) {
		score = 2;
	}

	if (correct == 1) {
		score = 1;
	}

	if (correct == 2) {
		score = 1;
	}

	if (correct == 3) {
		score = 1;
	}

	if (correct == 4) {
		score = 1;
	}

	if (correct == 5) {
		score = 0;
	}

	document.getElementById("after_submit").style.visibility = "visible";

	document.getElementById("message").innerHTML = messages[score];
	document.getElementById("number_correct").innerHTML = "You got " + correct + " correct.";
	document.getElementById("picture").src = pictures[score];
	}
	
	