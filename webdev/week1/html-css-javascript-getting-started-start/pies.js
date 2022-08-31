window.addEventListener("DOMContentLoaded", function (e) {
    const orderButtons = document.querySelectorAll("button[data-order]");

    orderButtons.forEach(function (button) {
        button.addEventListener("click", function (e) {
            // reference to the button which is clicked
            const button = e.currentTarget;
            // reference of parentNode of the button (div)
            const container = button.parentNode;

            // make order object
            const order = {
                id: button.getAttribute("data-order"),
                title: container.querySelector(".title").innerText,
                price: container.querySelector(".price").innerText,
                desc: container.querySelector(".desc").innerText
            };

            // convert that object a string
            // so that we can store that in the local-storage of the browser
            localStorage.setItem("order", JSON.stringify(order));

            // redirect to the order page
            const url = window.location.href.replace("pies.html", "order.html");
            window.location.href = url;

        });
    });
});
