const http = require("http");

const requestListener = (request, response) => {
    // request is readable stream
    // response is writeable stream

    // data coming in will be handles using request
    console.dir(request, { depth: 0 });

    // write response back using response
    response.end("Hey, World.");
}

const server = http.createServer();
server.on("request", requestListener);


server.listen(4000, () => { console.log("server is running on port 4000"); });
