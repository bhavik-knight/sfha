const express = require("express");

const server = express();

server.get("/", (request, response) => {
    // request and respond

    response.send("Hello, Express");
});

server.get("/about", (request, respond) => {
    respond.send("hello, we are in about");
});

server.listen(5000, () => {
    console.log("express server is running on port 5000");
})
