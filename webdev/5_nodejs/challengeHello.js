const theOneFunc = delay => {
    console.log(`Hello after ${delay} seconds`);
}

// hello after 4 sec
setTimeout(theOneFunc, 4 * 1000, 4);

// hello after 8 sec
setTimeout(theOneFunc, 8 * 1000, 8);
