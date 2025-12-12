document.addEventListener("DOMContentLoaded", function () {
    const supportform = document.getElementById("support");
    const reviewform = document.getElementById("review");

    if(supportform){
        supportform.addEventListener("submit",function(){
            alert("Support form sent! You should get a response within 24-48 hours!");
        })
    }
    if(reviewform){
        reviewform.addEventListener("submit",function(){
            alert("Review sent to our team, thank you!");
        })
    }
});