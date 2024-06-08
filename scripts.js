document.addEventListener("DOMContentLoaded", function() {
    console.log("Page loaded!");
    var getStartedButton = document.querySelector(".get-started-button");
    if (getStartedButton) {
        getStartedButton.addEventListener("click", function() {
            console.log("Get Started button clicked!");
        });
    }
});

