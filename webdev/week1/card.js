let links = document.querySelectorAll(".tag")
links.forEach(function (link) {
    link.setAttribute("target", "_blank");
    link.setAttribute("rel", "norefferer noopener");
});

let cards = document.querySelectorAll(".card")
cards.forEach(function (card) {
    console.log(card);
    // card.classList.add("dark");
});
