
document.getElementById("open-popup-btn").addEventListener("click",function(){

	document.getElementsByClassName("center-popup")[0].classList.add("active");
});

document.getElementById("dismiss-btn").addEventListener("click",function(){

	document.getElementsByClassName("center-popup")[0].classList.remove("active");
});



