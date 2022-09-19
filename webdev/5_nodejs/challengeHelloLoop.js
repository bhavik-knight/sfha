let counter = 0;

const intervalID = setInterval(() => {
    console.log("Hello World");
    ++counter;

    if (counter === 5) {
        console.log("Done");
        clearInterval(intervalID);
    }
}, 1 * 1000);
