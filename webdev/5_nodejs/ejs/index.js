const express = require("express");

const server = express();

server.set("view engine", "ejs");

server.get("/", (request, response) => {
    response.render("index");
});

server.get("/about", (request, response) => {
    response.render("about");
});

server.listen(5000, () => {
    console.log("server is running on port 5000");
});
