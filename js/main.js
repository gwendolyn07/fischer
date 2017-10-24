function homepage(){
	window.location.assign("homepage.html")
}

//This function is used in all pages
//needs an absolute path
function signIn(){
	window.location.assign("index.html")
}

function rSignUp(){
	window.location.assign("signUp.html")
}

function selectPackage(){
	window.location.assign("recruiter/packageOptions.html")
}

function whoAreYou(){
	window.location.assign("whoAreYou.html")
}

function schoolSignUp(){
	window.location.assign("schoolSignUp.html")
}

function writeText(text){
	document.getElementById("desc").innerHTML= text;
}

function imageDesc(text,image){
	document.getElementById("desc").innerHTML= text;

	document.emp.src=image;
	return true;
}


function setPackageCookie(package) {
	var d = new Date();
	d.setTime(d.getTime() + (7*24*60*60*1000));
	var expires = "expires=" + d.toGMTString();
	document.cookie = "urPackage="  + package + ";" + expires + ";path=/";

        window.location.assign("signUp.html");
}

function setSport(sport){
	var d = new Date();
        d.setTime(d.getTime() + (7*24*60*60*1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = "urSport="  + sport + ";" + expires + ";path=/";
}

function setGenderCookie(gender){
	//sets cookie
        var d = new Date();
        d.setTime(d.getTime() + (7*24*60*60*1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = "sportGender="  + gender + ";" + expires + ";path=/";

	//gets sport for next page in a cookie
	var sportSelected = getCookie("urSport");
	var site = sportSelected + ".html";

	//changes page
        window.location.assign(site);

}


//Grabs cookies when given name
function getCookie(name) {
	var name = name + "=";
	var decodedCookie = decodeURIComponent(document.cookie);
	var ca = decodedCookie.split(';');
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' '){
			c = c.substring(1);
		}
		if (c.indexOf(name) ==0) {
			return  c.substring(name.length, c.length);
		}
	}
	return "";
}

//display cookie
function displayCookie(id,cookieName) {
	var cookie = getCookie(cookieName);
        document.getElementById(id).innerHTML= cookie + " ";
}
