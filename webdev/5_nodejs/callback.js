const fs = require("fs");

fs.readFile(__filename, (err, data) => {
    console.log(`${__filename} data is\n${data}`);
});

console.log("test");
