
//Makes sure the document is loaded.
document.addEventListener("DOMContentLoaded", function () {
    const supportform = document.getElementById("support");
    const reviewform = document.getElementById("review");
//If the support form is uploaded, there's an alert telling the user it was sent.
//The ifs are so the alerts can be different from each other.
    if(supportform){
        supportform.addEventListener("submit",function(){
            alert("Support form sent! You should get a response within 24-48 hours!");
        })
    }
//If the review form is uploaded, there's an alert telling the user it was sent.
    if(reviewform){
        reviewform.addEventListener("submit",function(){
            alert("Review sent to our team, thank you!");
        })
    }
});