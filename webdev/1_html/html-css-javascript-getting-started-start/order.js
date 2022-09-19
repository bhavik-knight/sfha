window.addEventListener("DOMContentLoaded", function (e) {
    // get the current location of the user
    let locationBox = document.querySelector("#location");
    let location = {
        latitude: "unknown",
        longitude: "unknown"
    };

    // call the function based on location
    window.navigator.geolocation.getCurrentPosition(
        function (position) {
            location = {
                latitude: position.coords.longitude,
                longitude: position.coords.latitude
            }

            locationBox.value = JSON.stringify(location);
        },

        function (error) {
            locationBox.value = JSON.stringify(location);
        }
    );

    // get the order from the local storage
    const order = window.localStorage.getItem("order");

    // create object from the string returned by the local storage
    const pieOrder = JSON.parse(order);

    // if only order is not null
    if (order) {

        // get reference to the pir from the order page
        const pie = document.querySelector(".pie");
        const title = pie.querySelector(".title");
        const price = pie.querySelector(".price");
        const desc = pie.querySelector(".desc");
        // hidden order input query selector
        const orderInput = document.querySelector("#pie-order");


        // populate HTML of pie in the order page
        title.innerText = pieOrder.title;
        price.innerText = pieOrder.price;
        desc.innerText = pieOrder.desc;
        // hidden order input value stored
        orderInput.value = order;

        // get image reference
        const img = pie.querySelector("img");
        img.setAttribute("src", `images/${pieOrder.id}.png`);
        img.setAttribute("alt", pieOrder.title);
    }
});
